<?php

namespace App\Reserve\Database\Seeds\Faker;

use Melisa\Laravel\Database\InstallSeeder;
use App\Reserve\Models\Events;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class EventsSeeder extends InstallSeeder
{
    
    public function run()
    {
        dd(factory(Events::class));
    }
    
}
