<?php 

namespace App\Reserve\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
abstract class ReservationsAbstract extends Base
{    
    protected $connection = 'reserve';
    protected $table = 'reservations';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'idEvent',
        'email',
        'name',
        'lastname',
        'numberPeople',
        'createdAt',
        'idIdentityUpdated',
        'updatedAt'
    ];    
}
