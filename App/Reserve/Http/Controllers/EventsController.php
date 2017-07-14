<?php

namespace App\Reserve\Http\Controllers;

use Melisa\Laravel\Http\Controllers\CrudController;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class EventsController extends CrudController
{
    
    protected $paging = [
        'criteria'=>'Events\PagingCriteria',
        'request'=>'Events\PagingRequest',
    ];
    
    protected $report = [
        'module'=>'Universal\Events\ReportModule',
        'logic'=>'ReportLogic',
    ];
    
}
