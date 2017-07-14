<?php

namespace App\Guest\Http\Requests\Reservations;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends Generic
{
    
    protected $rules = [        
        'idEvent'=>'nullable|xss|max:46|exists:reserve.events,id',
        'name'=>'required|xss|max:35',
        'lastname'=>'required|xss|max:35',
        'email'=>'required|xss|email',
        'numberPeople'=>'required|xss|integer|min:1',
    ];
    
}
