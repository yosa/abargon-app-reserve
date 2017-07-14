<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('events/{id}/{title}', 'HomeController@detail')->name('event.detail');
Route::get('events/photos/{id}/{width}/{height}', 'HomeController@photo')->name('event.photo');
Route::post('reservations', 'ReservationsController@index')->name('reservation');
Auth::routes();
