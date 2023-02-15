<?php
namespace App\Validators;
use Config;
class ReCaptcha
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $secret   = Config::get('services.google_recaptcha.secret_key');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'secret' => $secret,
            'response' => $value
        ]);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);

        return $response->success;

        // $response = file_get_contents(
        //     "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $value
        // );
        // $response = json_decode($response);
        // return $response->success;
    }
}