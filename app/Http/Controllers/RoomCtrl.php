<?php

namespace glado\Http\Controllers;

use Illuminate\Http\Request;
use glado\Room;
use glado\Book;

class RoomCtrl extends Controller
{
    public function create() {
      return view('admin.roomregister');
    }

    public function postCreate(Request $request) {
      $room = new Room;

      $room->room_name = $request->input('room_name');
      $room->capacity = $request->input('capacity');
      $room->save();

      return redirect('/system/rooms/view');
    }

    public function viewrooms() {
      $rooms = Room::all();

      return view('admin.viewrooms')->with('rooms', $rooms);
    }

    public function destroy($id) {
      $room = Room::findOrFail($id);

      $room->delete();

      return redirect('/system/rooms/view');
    }

    public function editRoom($id) {
      $room = Room::findOrFail($id);

      return view('admin.roomedit')->with('room', $room);
    }

    public function updateRoom(Request $request, $id) {
      $room = Room::findOrFail($id);

      $room->room_name = $request->input('room_name');
      $room->capacity = $request->input('capacity');
      $room->save();

      return redirect('/system/rooms/view')->with('room', $room);
    }

    public function manageBookings() {
      $bookings = Book::all();

      return view('admin.bookings')->with('bookings', $bookings);
    }
}
