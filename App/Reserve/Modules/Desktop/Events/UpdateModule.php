<?php

namespace App\Reserve\Modules\Desktop\Banks;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class UpdateModule extends Outbuildings
{
    
    public $event = 'reserve.events.update.access';
    
    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'submit'=>$this->module('task.reserve.events.update'),
                    'report'=>$this->module('task.reserve.events.report'),
                ],
                'wrapper'=>[
                    'title'=>'Modificar evento'
                ],
                'i18n'=>[
                    'success'=>'Evento modificado'
                ]
            ]
        ];        
    }
    
}
