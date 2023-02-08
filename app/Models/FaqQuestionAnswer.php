<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use App\Traits\ValidationTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqQuestionAnswer extends Model
{
    use SoftDeletes;
    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }
    
    public function __construct() {
        
        parent::__construct();
        $this->__validationConstruct();
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faq_question_answers';

    protected $fillable = array('question', 'answer', 'display_order', 'linkable_id', 'linkable_type');    


    protected function setRules() {

        $this->val_rules = array(
            
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
              
        );
    }

    public function linkable()
    {
        return $this->morphTo();
    }
}
