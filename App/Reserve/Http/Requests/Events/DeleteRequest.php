<?php

namespace App\Reserve\Http\Requests\Events;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeleteRequest extends Generic
{
    
    protected $rules = [
        'id'=>'bail|required|max:36|xss|exists:insurance.insured,id',
    ];
    
}
