<?php

namespace App\Reserve\Http\Requests\Events;

use App\Reserve\Http\Requests\Events\CreateRequest;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UpdateRequest extends CreateRequest
{
    
    /**
     * Reuse input create request
     * @return array
     */
    public function rules()
    {        
        $rules = parent::rules();
        $rules ['id']= 'bail|required|max:36|xss|exists:insurance.banks,id';        
        return $rules;        
    }
    
}
