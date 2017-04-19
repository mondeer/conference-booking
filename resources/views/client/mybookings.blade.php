@extends('client.dashboard')

@section('content')
<header class="panel-heading no-border">
    My Bookings
</header>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Room Booked</th>
        <th>Day of Event</th>
        <th>Hour Scheduled</th>
        <th>Department</th>
        <th>Contact Email</th>
        <th>Contact Phone</th>
      </tr>
    </thead>
    <tbody>

      @foreach($bookings as $booking)
        <tr>
          <td>{{$booking->id}}</td>
          <td>{{$booking->room_name}}</td>
          <td>{{$booking->day_schedule}}</td>
          <td>{{$booking->hours_schedule}}</td>
          <td>{{$booking->department}}</td>
          <td>{{$booking->contact_person_email}}</td>
          <td>{{$booking->contact_person_phone}}</td>
          <td>
            <form class="delete" action="/client/{{ $booking->id }}/delete" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
