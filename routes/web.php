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

Route::resource('/room', 'RoomCtrl');

Route::get('/rooms/bookings', 'RoomCtrl@view');


// Route::get('/register', function() {
//   return view('register');
// });
