@extends('admin.admindash')

@section('admin')
<header class="panel-heading no-border">

</header>
<div class="span8">
  <h1>Available Board Rooms</h1>
  <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Room Name</th>
          <th>Room Capacity</th>
        </tr>
      </thead>
      <tbody>

        @foreach($rooms as $room)
          <tr>
            <td>{{$room->id}}</td>
            <td>{{$room->room_name}}</td>
            <td>{{$room->capacity}}</td>
            <td><a class="btn btn-primary" href="/system/room/edit/{{$room->id}}">Edit</a></td>
            <td>
              <form class="delete" action="/system/{{ $room->id }}/delete" method="post">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger">DELETE</button>
              </form>
            </td>

          </tr>
        @endforeach
      </tbody>
  </table>
</div>
@endsection
