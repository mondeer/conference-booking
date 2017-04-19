<?php

namespace glado\Http\Controllers;

use Illuminate\Http\Request;
use glado\Book;
use glado\Room;

class BookCtrl extends Controller
{
    public function create() {
      $rooms = Room::all();
      return view('client.apply')->with('rooms', $rooms);
    }
    public function postCreate(Request $request) {
      $bookings = new Book;


    }
}
