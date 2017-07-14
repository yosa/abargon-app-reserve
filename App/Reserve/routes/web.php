<?php 

use App\Reserve\Models\Events;

Route::group([
    'prefix'=>'modules',
    'namespace'=>'Modules'
], function() {    
    require realpath(base_path() . '/routes/modules.php');    
});

Route::group([
    'prefix'=>'events',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/events.php');    
});

Route::group([
    'prefix'=>'reservations',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/reservations.php');    
});

Route::get('faker/{total}', function($total) {
    $records = factory(Events::class, (int)$total)->create();
    return redirect('../');
})->middleware('auth');
