<?php 

namespace App\Reserve\Modules\Desktop\Events;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AddModule extends Outbuildings
{
    
    public $event = 'reserve.events.add.access';
    
    public function dataDictionary()
    {        
        return [
            'success'=>true,
            'assets'=>[
                $this->asset('app.reserve.events.add')
            ],
            'data'=>[
                'token'=>csrf_token(),
                'modules'=>[
                    'submit'=>$this->module('task.reserve.events.create'),
                    'filesSelect'=>$this->module('task.drive.files.select.access', false),
                ],
                'wrapper'=>[
                    'title'=>'Agregar evento'
                ],
                'i18n'=>[
                    'success'=>'Evento creado',
                    'btnSave'=>'Agregar evento',
                ]
            ]
        ];        
    }
    
}
