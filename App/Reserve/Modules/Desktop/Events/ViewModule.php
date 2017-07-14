<?php

namespace App\Reserve\Modules\Desktop\Events;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ViewModule extends Outbuildings
{
    
    public $event = 'reserve.events.view.access';

    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'events'=>$this->module('task.reserve.events.paging'),
                    'report'=>$this->module('task.reserve.events.report'),
                    'update'=>$this->module('task.reserve.events.update.access', false),
                    'add'=>$this->module('task.reserve.events.add.access', false),
                    'delete'=>$this->module('task.reserve.events.delete', false),
                ],
                'wrapper'=>[
                    'title'=>'Eventos'
                ]
            ]
        ];        
    }
    
}
