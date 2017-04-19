<?php

namespace glado\Http\Controllers;

use Illuminate\Http\Request;
use glado\Book;
use glado\Room;
use Sentinel;

class BookCtrl extends Controller
{
    public function create() {
      $rooms = Room::all();
      return view('client.apply')->with('rooms', $rooms);
    }
    public function postCreate(Request $request) {
      $bookings = new Book;

      $user = Sentinel::getUser()->email;

      $bookings->room_name = $request->input('room_name');
      $bookings->hours_schedule = $request->input('hours_schedule');
      $bookings->day_schedule = $request->input('day_schedule');
      $bookings->department = $request->input('department');
      $bookings->contact_person_phone = $request->input('contact_person_phone');
      $bookings->contact_person_email = $user;
      $bookings->save();

      dd($bookings);


    }
}
