<?php

Route::get('/', function () {
    return view('welcome');
});

// auth routes
Route::get('/register', 'RegisterCtrl@register');

Route::post('/register', 'RegisterCtrl@postRegister');

Route::post('/login', 'LoginCtrl@login');

Route::post('/logout', 'LoginCtrl@logout');

// end auth routes


Route::get('/client/panel', function() {
  return view('client.dashboard');
});

Route::get('/rooms/bookings', 'RoomCtrl@view');


// admin routes

Route::get('/system/admin', function() {
  return view('admin.admindash');
});


// room routes
Route::get('/system/roomreg', 'RoomCtrl@create');

Route::post('/system/roomreg', 'RoomCtrl@postCreate');

Route::get('/system/rooms/view', 'RoomCtrl@viewrooms');

Route::delete('/system/{id}/delete', 'RoomCtrl@destroy');
// end room routes
