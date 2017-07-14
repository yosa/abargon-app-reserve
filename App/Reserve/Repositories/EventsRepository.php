<?php

namespace App\Reserve\Repositories;

use Melisa\Repositories\Eloquent\Repository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class EventsRepository extends Repository
{
    
    public function model()
    {        
        return 'App\Reserve\Models\Events';        
    }
    
}
