<?php 

Route::group([
    'prefix'=>'events',
], function() {    
    require realpath(base_path() . '/routes/modules/events.php');    
});
