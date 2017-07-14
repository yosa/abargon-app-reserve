<?php

namespace App\Reserve\Http\Requests\Events;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateRequest extends Generic
{
    
    protected $rules = [        
        'idPhoto'=>'nullable|xss|max:46|exists:drive.files,id',
        'name'=>'required|xss|max:255',
        'description'=>'required|xss|max:600',
        'startDate'=>'required|xss|date',
        'endDate'=>'required|xss|date',
        'maximumCapacity'=>'required|xss|integer|min:1',
    ];
    
}
