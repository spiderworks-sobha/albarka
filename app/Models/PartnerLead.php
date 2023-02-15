<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerLead extends Model
{
    use SoftDeletes;
	use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }
    
    public function __construct() {
        
        parent::__construct();
        $this->__validationConstruct();
    }

    protected $table = 'partner_leads';


    protected $fillable = array('name', 'email', 'address', 'phone_number', 'contact_person_role', 'shop_type', 'no_of_shops', 'utm_source', 'source_url', 'ip_address', 'user_agent', 'referrer_link', 'remarks', 'status');

    protected $dates = ['created_at','updated_at'];

    protected function setRules() {

        $this->val_rules = array(
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }

    public function updated_user()
    {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }

}