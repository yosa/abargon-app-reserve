<?php 

Route::post('/', 'EventsController@create')->middleware('gate:task.reserve.events.create');
Route::post('delete', 'EventsController@delete')->middleware('gate:task.reserve.events.delete');
Route::post('update', 'EventsController@update')->middleware('gate:task.reserve.events.update');
Route::post('activate', 'EventsController@activate')->middleware('gate:task.reserve.events.activate');
Route::post('deactivate', 'EventsController@deactivate')->middleware('gate:task.reserve.events.deactivate');
Route::get('create', 'EventsController@create')->middleware('gate:task.reserve.events.create');
Route::post('update', 'EventsController@update')->middleware('gate:task.reserve.events.update');

Route::get('/', 'EventsController@paging')->middleware('gate:task.reserve.events.paging');
Route::get('view', 'EventsController@view')->middleware('gate:task.reserve.events.view.access');
Route::get('update', 'EventsController@update')->middleware('gate:task.reserve.events.update.access');
Route::get('add', 'EventsController@add')->middleware('gate:task.reserve.events.add.access');
Route::get('report/{id}/{format?}', 'EventsController@report')->middleware('gate:task.reserve.events.report');
