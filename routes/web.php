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

// admin routes

Route::get('/system/admin', function() {
  return view('admin.admindash');
});


// admin routes
Route::get('/system/roomreg', 'RoomCtrl@create');

Route::post('/system/roomreg', 'RoomCtrl@postCreate');

Route::get('/system/rooms/view', 'RoomCtrl@viewrooms');

Route::get('/system/room/edit/{id}', 'RoomCtrl@editRoom');

Route::put('/system/room/edit/{id}', 'RoomCtrl@updateRoom');

Route::delete('/system/{id}/delete', 'RoomCtrl@destroy');

Route::get('/system/manage/bookings', 'RoomCtrl@manageBookings');
// end admin routes


// client/employee routes
Route::get('/room/book', 'BookCtrl@create');

Route::post('/room/book', 'BookCtrl@postCreate');

Route::get('/client/mybookings', 'BookCtrl@mybookings');

Route::delete('/client/{id}/delete', 'BookCtrl@destroy');

// end client/employee routes
