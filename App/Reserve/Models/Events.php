<?php 

namespace App\Reserve\Models;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class Events extends EventsAbstract
{
    protected $dates = [
        'startDate',
        'endDate',
    ];
    
    public function reservations()
    {
        return $this->hasMany('App\Reserve\Models\Reservations', 'idEvent', 'id');
    }
    
}
