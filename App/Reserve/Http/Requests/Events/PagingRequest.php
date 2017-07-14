<?php

namespace App\Reserve\Http\Requests\Events;

use Melisa\Laravel\Http\Requests\WithFilter;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PagingRequest extends WithFilter
{
    protected $rules = [
        'page'=>'required|xss|numeric',
        'start'=>'required|xss|numeric',
        'limit'=>'required|xss|numeric',
        'filter'=>'sometimes|json|filter:name,startDate',
    ];
    
    public $rulesFilters = [
        'name'=>'nullable|max:255|xss',
        'startDate'=>'nullable|xss|date',
    ];
    
}
