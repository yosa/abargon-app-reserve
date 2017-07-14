<?php

namespace App\Guest\Logics;

use App\Reserve\Repositories\EventsRepository;

/**
 * Get detail event
 *
 * @author Luis Josafat Heredia Contreras
 */
class DetailLogic
{
    
    protected $repositoryEvents;

    public function __construct(
        EventsRepository $repositoryEvents
    )
    {
        $this->repositoryEvents = $repositoryEvents;
    }
    
    public function init($id)
    {
        $event = $this->getEvent($id);
        
        if( !$event) {
            return false;
        }
        
        return [
            'event'=>$event
        ];
    }
    
    public function getEvent($id)
    {
        return $this->repositoryEvents
            ->find($id);
    }
    
}
