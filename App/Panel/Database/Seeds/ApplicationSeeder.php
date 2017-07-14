<?php 

namespace App\Panel\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ApplicationSeeder extends InstallSeeder
{
    
    public function run()
    {        
        $this->installApplication('panel', [
            'name'=>'Panel',
            'description'=>'Application Panel',
            'nameSpace'=>'Melisa.panel',
            'typeSecurity'=>'arat',
            'version'=>'1.0.0',
        ]);        
    }
    
}
