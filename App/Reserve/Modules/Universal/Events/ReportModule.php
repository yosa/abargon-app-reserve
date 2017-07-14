<?php

namespace App\Reserve\Modules\Universal\Events;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ReportModule extends Outbuildings
{
    
    public $layout = 'layouts.events.report';

    public function dataDictionary()
    {        
        $input = $this->getInput();        
        if( !$input) {
            return false;
        }
        
        return [
            'pageTitle'=>'Evento :: ' . $input->id,
            'assets'=>[
                'header'=>$this->asset([
                    'bootstrap.reports',
                    'bootstrap.reports.print',
                    'fontawesome',
                    'app.reserve.events.report'
                ])
            ],
            'report'=>$input
        ];
        
    }
    
}
