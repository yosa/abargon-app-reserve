<?php

namespace App\Reserve\Database\Seeds\Modules;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesUniversalSeeder extends InstallSeeder
{
    
    public function run()
    {
        $this->events();
    }
    
    public function events()
    {
        $this->installModuleJson('Universal/Events', [
            'create',
            'paging',
            'report',
            'update',
            'delete',
        ]);
        $this->installAssetCss('app.reserve.events.report', [
            'name'=>'CSS module events report',
            'path'=>'/reserve/css/events-report.css'
        ]);
    }
    
}
