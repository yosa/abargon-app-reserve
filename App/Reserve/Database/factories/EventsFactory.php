<?php

use App\Core\Models\Identities;
use App\Drive\Models\Files;

$factory->define(App\Reserve\Models\Events::class, function(Faker\Generator $faker) {
    return [
        'idIdentityCreated'=>function() {
            return Identities::where('displayEspecific', 'Developer')->first()->id;
        },
        'idPhoto'=>function() {
            return Files::inRandomOrder()->first()->id;
        },
        'name'=>$faker->name,
        'description'=>$faker->paragraphs(10, true),
        'startDate'=>$faker->dateTimeBetween('-1 day', 'now'),
        'endDate'=>$faker->dateTimeBetween('now', 'next wednesday'),
        'maximumCapacity'=>$faker->numberBetween(1, 10),
        'outstanding'=>$faker->boolean
    ];
});
