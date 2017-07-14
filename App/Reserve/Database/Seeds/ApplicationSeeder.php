<?php

namespace App\Reserve\Database\Seeds;

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
        
        $this->installApplication('reserve', [
            'name'=>'Reserve',
            'description'=>'Application Reserve',
            'nameSpace'=>'Abargon.reserve',
            'typeSecurity'=>'art',
            'version'=>'1.0.0'
        ]);
        
    }
    
}
