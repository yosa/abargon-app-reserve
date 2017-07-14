<?php

namespace App\Reserve\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;
use App\Reserve\Models\Events;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class FakerSeeder extends InstallSeeder
{
    
    public function run()
    {
        dd($this->factory(Events::class));
        $this->call(Faker\EventsSeeder::class);        
    }
    
}
