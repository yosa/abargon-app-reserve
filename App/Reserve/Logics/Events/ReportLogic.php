<?php

namespace App\Reserve\Logics\Events;

use App\Reserve\Repositories\EventsRepository;

/**
 * Description of ReportLogic
 *
 * @author Luis Josafat Heredia Contreras
 */
class ReportLogic
{
    
    protected $events;

    public function __construct(EventsRepository $events)
    {
        $this->events = $events;
    }
    
    public function init($id)
    {
        $result = $this->getEvent($id);
        
        if( !$result) {
            return false;
        }
        
        return json_decode(json_encode($result));
    }
    
    public function getEvent($id)
    {
        return $this->events->with([
            'reservations'
        ])->find($id);
    }
    
}
