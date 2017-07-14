<?php

namespace App\Reserve\Repositories;

use Melisa\Repositories\Eloquent\Repository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class ReservationsRepository extends Repository
{
    
    public function model()
    {        
        return 'App\Reserve\Models\Reservations';        
    }
    
}
