<?php

namespace glado\Http\Controllers;

use Illuminate\Http\Request;
use glado\Room;

class RoomCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('client.apply');
    }

    public function store(Request $request)
    {
        $rooms = new Room;

        $rooms->emp_name = $request->input('emp_name');
        $rooms->email = $request->input('email');
        $rooms->pf = $request->input('pf');
        $rooms->department = $request->input('department');
        $rooms->room = $request->input('room');
        $rooms->save();

        return redirect('/rooms/bookings');
    }

    public function view() {
      $rooms = Room::all();

      return view('client.view')->with('rooms', $rooms);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
      $room = Room::find($id);
      $room->delete();
      return redirect('/rooms/bookings');
    }
}
