@extends('client.dashboard')

@section('content')
<header class="panel-heading no-border">
    My Bookings
</header>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>Email</th>
        <th>Personal Number</th>
        <th>Department</th>
        <th>Conference Room Bookied</th>
      </tr>
    </thead>
    <tbody>

      @foreach($rooms as $room)
        <tr>
          <td>{{$room->id}}</td>
          <td>{{$room->emp_name}}</td>
          <td>{{$room->email}}</td>
          <td>{{$room->pf}}</td>
          <td>{{$room->department}}</td>
          <td>{{$room->room}}</td>
          <td>
            <form class="delete" action="/room/{{ $room->id }}" method="post">
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
