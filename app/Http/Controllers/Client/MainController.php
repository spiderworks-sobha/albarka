<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Services\MailSettings;
use App\Mail\Test;
use App\Models\FrontendPage;
use App\Models\Location;
use App\Models\Blog;
use App\Traits\ClientInfoTrait;
use App\Models\Lead as Contact;
use App\Models\Setting;
use App\Models\PartnerLead;
use Validator;

class MainController extends Controller
{
    use ClientInfoTrait;
    public function index(){
        $home_settings = Cache::get('home_settings', function () {
            $page = FrontendPage::where('slug', 'index')->first();
            return $page;
        });
        $locations = Location::where('is_featured', 1)->where('status', 1)->orderBy('priority')->get();
        $blogs = Blog::where('is_featured', 1)->where('status', 1)->orderBy('created_at', 'DESC')->take(5)->get();
        $first_blog = null;
        if(count($blogs)){
            $first_blog = $blogs[0];
            unset($blogs[0]);
        }
        return view('client.index')->with('page_details', $home_settings)->with('locations', $locations)->with('blogs', $blogs)->with('first_blog', $first_blog);
    }

    public function contact_us(){
        $contact_settings = Cache::get('contact_settings', function () {
            $page = FrontendPage::where('slug', 'contact-us')->first();
            return $page;
        });
        return view('client.contact_us')->with('page_details', $contact_settings);
    }

    public function contact_save(Request $request)
    {
        $data = $request->all();
        Validator::extend('spam_check', function ($attribute, $value, $parameters) {
            preg_match('#<a[\s]+([^>]+)>((?:.(?!\<\/a\>))*.)</a>#',$value,$a);
            if($a)
                return false;
            else
            {
                $bHasLink = strpos($value, 'http') !== false || strpos($value, 'www.') !== false;
                if($bHasLink)
                    return false;
                else
                    return true;
            }
        });
        
        $support = new Contact;
        $rules = array(
            'name' => 'required|max:255',
            'phone_number' => 'required|max:20',
            'recaptcha' => 'required|recaptcha'
        );
        if(!empty($data['lead_type']) && $data['lead_type'] == 'Delivery'){
            $rules['location'] = 'required';
        }
        else{
            $rules['email'] = ['nullable', 'email', 'max:255'];
            //$rules['message'] = 'required|spam_check';
        }

        $messages = [
            'name.required' => 'Please enter your first name',
            'phone_number.required' => 'Please enter your phone number',
        ];
        if(!empty($data['lead_type']) && $data['lead_type'] == 'Delivery'){
            $messages['location.required'] = 'Please select delivery location';
        }
        else{
            $rules['email.email'] = 'Please enter a valid email address';
            //$rules['message.required'] = 'Please enter your message';
            //$rules['message.spam_check'] = 'Contains unwanted values.';
        }

        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $browser_details = $this->get_browser();
        $data['user_agent'] = $browser_details['userAgent'];
        $data['ip_address'] = $this->get_ip();
        $data['referrer_link'] = $this->get_referer();

        $support->fill($data);
        $support->save();
        
        $notif_emails = Setting::where('code', 'contact_notification_email_ids')->first();
        if($notif_emails && trim($notif_emails->value_text) != '')
        {
            $mail = new MailSettings;
            $email_array = explode(',', $notif_emails->value_text);
            array_filter($email_array, function($value){ 
                return !is_null($value) && $value !== '';
             });
            $email_array = array_map('trim', $email_array);
            $mail->to($email_array)->send(new \App\Mail\Contact($support));
        } 
        if($support->email){
            $thank_mail = new MailSettings;
            //$thank_mail->to($support->email)->send(new \App\Mail\ContactThankyou($support));
        }
        return response()->json(['success'=>true]);
    }

    public function partner_save(Request $request)
    {
        $data = $request->all();
        
        $support = new PartnerLead;
        $rules = array(
            'name' => 'required|max:255',
            'phone_number' => 'required|max:20',
            'email' => ['nullable', 'email', 'max:255'],
            'recaptcha' => 'required|recaptcha'
        );

        $messages = [
            'name.required' => 'Please enter your first name',
            'phone_number.required' => 'Please enter your phone number',
            'email.email' => 'Please enter a valid email address',
        ];

        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $browser_details = $this->get_browser();
        $data['user_agent'] = $browser_details['userAgent'];
        $data['ip_address'] = $this->get_ip();
        $data['referrer_link'] = $this->get_referer();

        $support->fill($data);
        $support->save();
        
        $notif_emails = Setting::where('code', 'partner_register_notification_email_ids')->first();
        if($notif_emails && trim($notif_emails->value_text) != '')
        {
            $mail = new MailSettings;
            $email_array = explode(',', $notif_emails->value_text);
            array_filter($email_array, function($value){ 
                return !is_null($value) && $value !== '';
             });
            $email_array = array_map('trim', $email_array);
            $mail->to($email_array)->send(new \App\Mail\Contact($support));
        } 
        if($support->email){
            $thank_mail = new MailSettings;
            //$thank_mail->to($support->email)->send(new \App\Mail\ContactThankyou($support));
        }
        return response()->json(['success'=>true]);
    }

    public function partners(){
        $partner_settings = Cache::get('partner_settings', function () {
            $page = FrontendPage::where('slug', 'partners')->first();
            return $page;
        });
        return view('client.partners')->with('page_details', $partner_settings);
    }

    public function test_mail()
    {
        $mail = new MailSettings;
        $mail->to('sobha@spiderworks.in')->cc('sobha.ashtaman@gmail.com')->send(new Test([]));
        echo "Mail send";exit;
    }

}
