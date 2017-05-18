@extends('client.dashboard')

@section('content')
      <div class="row">
          <div class="col-md-12">
              <h1 class="page-head-line">Request For A Conference Room</h1>
          </div>
      </div>

      <div class="col-md-6 col-md-offset-2">

            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>Book Conference Room</h5>
            </div>

              <form action="/room/book" method="POST" class="form-horizontal">
                {{csrf_field()}}

                <div class="control-group">
                  <label class="control-label">Name Of Room :</label>
                  <div class="controls">
                    <select class="" name="room_name">
                      @foreach($rooms as $room)
                        <option>{{$room->room_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Duration of Event:</label>
                  <div class="controls">
                    <input type="number" class="" name="hours_schedule" placeholder="Duration of Event" required/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Date of Event:</label>
                  <div class="controls">
                    <div  data-date="2017-18-04" class="input-append date datepicker">
                      <input type="text" name="day_schedule" value="2017-19-04"  data-date-format="mm-dd-yyyy" >
                      <span class="add-on"><i class="icon-time"></i></span>
                    </div>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Your Department :</label>
                  <div class="controls">
                    <select class="" name="department">
                      <option>ICT</option>
                      <option>HOUSE KEEPING</option>
                      <option>NURSING</option>
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Contact Person Mobile :</label>
                  <div class="controls">
                    <input type="tel" name="contact_person_phone" class="" required/>
                    <span class="help-block">*Enter Phone Number, starting with +254</span>
                  </div>
                </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>

              </form>
            <!-- </div> -->

        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
                How To Book Conference Room
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">MTRH</a>
                    </li>
                    <li class=""><a href="#booking" data-toggle="tab">Booking</a>
                    </li>
                    <li class=""><a href="#deleting" data-toggle="tab">Deleting</a>
                    </li>
                    <li class=""><a href="#editing" data-toggle="tab">Editing</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <h4>Intro To MTRH</h4>
                        <li><i class="icon icon-ok"></i>Coolest Place</li>
                        <li><i class="icon icon-ok"></i>MRI IKO</li>
                        <li><i class="icon icon-ok"></i>Ni Kubwa</li>
                        <li><i class="icon icon-ok"></i>Security Wako</li>
                    </div>

                    <div class="tab-pane fade" id="booking">
                        <h4>How To Book A conference room</h4>
                        <p>
                          You sit down, then you start thinking of Venue of your little meetup, we got you covered
                        </p>
                        <li><i class="icon icon-ok"></i>Login Kwanza</li>
                        <li><i class="icon icon-ok"></i>Check Available Rooms</li>
                        <li><i class="icon icon-ok"></i>Select That which suites you</li>
                        <li><i class="icon icon-ok"></i>There you have it, fill in the form and submit, you will be routed to my bookings page</li>
                    </div>

                    <div class="tab-pane fade" id="deleting">
                        <h4>How To Role Back A Booking</h4>
                        <p>
                          Sometimes you do things you were not supposed to do, adn you wonder how to role it back, we make easy
                        </p>
                        <li><i class="icon icon-ok"></i>Accept the Mistake</li>
                        <li><i class="icon icon-ok"></i>Go to My Bookings</li>
                        <li><i class="icon icon-ok"></i>A table will avail all your Bookings</li>
                        <li><i class="icon icon-ok"></i>Delete Your Mistake, then walk away like nothing happened</li>
                    </div>

                    <div class="tab-pane fade" id="editing">
                      <h4>How To Role Back A Booking</h4>
                      <p>
                        Sometimes you do things you were not supposed to do, adn you wonder how to role it back, we make easy
                      </p>
                      <li><i class="icon icon-ok"></i>Accept the Mistake</li>
                      <li><i class="icon icon-ok"></i>Go to My Bookings</li>
                      <li><i class="icon icon-ok"></i>A table will avail all your Bookings</li>
                      <li><i class="icon icon-ok"></i>Delete Your Mistake, then walk away like nothing happened</li>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection
