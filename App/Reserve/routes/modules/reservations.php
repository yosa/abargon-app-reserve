<?php 

Route::post('/', 'ReservationsController@create')->middleware('gate:task.reserve.reservations.create');
Route::post('delete', 'ReservationsController@delete')->middleware('gate:task.reserve.reservations.delete');
Route::post('update', 'ReservationsController@update')->middleware('gate:task.reserve.reservations.update');
Route::post('activate', 'ReservationsController@activate')->middleware('gate:task.reserve.reservations.activate');
Route::post('deactivate', 'ReservationsController@deactivate')->middleware('gate:task.reserve.reservations.deactivate');
Route::get('create', 'ReservationsController@create')->middleware('gate:task.reserve.reservations.create');
Route::post('update', 'ReservationsController@update')->middleware('gate:task.reserve.reservations.update');

Route::get('/', 'ReservationsController@paging')->middleware('gate:task.reserve.reservations.paging');
Route::get('view', 'ReservationsController@view')->middleware('gate:task.reserve.reservations.view.access');
Route::get('update', 'ReservationsController@update')->middleware('gate:task.reserve.reservations.update.access');
Route::get('add', 'ReservationsController@add')->middleware('gate:task.reserve.reservations.add.access');
Route::get('report/{id}/{format?}', 'ReservationsController@report')->middleware('gate:task.reserve.reservations.report');
