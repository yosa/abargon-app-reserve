<?php

namespace App\Guest\Logics;

use App\Reserve\Repositories\EventsRepository;
use App\Reserve\Criteria\Events\OutstandingCriteria;
use App\Reserve\Criteria\Events\NoOutstandingCriteria;

/**
 * Get data home page
 *
 * @author Luis Josafat Heredia Contreras
 */
class HomeLogic
{
    
    protected $repositoryEvents;
    protected $criteriaOutstanding;
    protected $criteriaNoOutstanding;

    public function __construct(
        EventsRepository $repositoryEvents,
        OutstandingCriteria $criteriaOutstanding,
        NoOutstandingCriteria $criteriaNoOutstanding
    )
    {
        $this->repositoryEvents = $repositoryEvents;
        $this->criteriaOutstanding = $criteriaOutstanding;
        $this->criteriaNoOutstanding = $criteriaNoOutstanding;
    }
    
    public function init()
    {
        return [
            'outstanding'=>$this->getOutstanding(),
            'events'=>$this->getEvents()
        ];
    }
    
    public function getOutstanding()
    {
        return $this->repositoryEvents
            ->getByCriteriaReset($this->criteriaOutstanding)
            ->get();
    }
    
    public function getEvents()
    {
        return $this->repositoryEvents
            ->getByCriteriaReset($this->criteriaNoOutstanding)
            ->get();
    }
    
}
