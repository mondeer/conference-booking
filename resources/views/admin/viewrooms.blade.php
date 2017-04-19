@extends('admin.admindash')

@section('admin')
<header class="panel-heading no-border">

</header>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Room Name</th>
        <th>Room Number</th>
        <th>Room Capacity</th>
      </tr>
    </thead>
    <tbody>

      @foreach($rooms as $room)
        <tr>
          <td>{{$room->id}}</td>
          <td>{{$room->room_name}}</td>
          <td>{{$room->room_number}}</td>
          <td>{{$room->capacity}}</td>
          <td>
            <form class="delete" action="/system/{{ $room->id }}/delete" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" value="Delete">
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
