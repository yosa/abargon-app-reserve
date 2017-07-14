<?php 

namespace App\Reserve\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class EventsAbstract extends Base
{    
    protected $connection = 'reserve';
    protected $table = 'events';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name',
        'idStatusEvent',
        'idPhoto',
        'idIdentityCreated',
        'description',
        'startDate',
        'endDate',
        'outstanding',
        'maximumCapacity',
        'totalReservations',
        'createdAt',
        'idIdentityUpdated',
        'updatedAt'
    ];    
}
