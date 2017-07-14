<?php

namespace App\Reserve\Database\Seeds\Modules;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesDesktopSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $this->events();        
    }
    
    public function events()
    {
        $this->installModuleJson('Desktop/Events', [
            'add',
            'update',
            'view',
        ]);
        $this->installAssetCss('app.reserve.events.add', [
            'name'=>'CSS module events add',
            'path'=>'/reserve/css/events-add.css'
        ]);
    }
    
}
