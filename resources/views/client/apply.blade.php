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
                  <label class="control-label">Name Of Room :</label>
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
                    <li class=""><a href="#profile" data-toggle="tab">Profile</a>
                    </li>
                    <li class=""><a href="#messages" data-toggle="tab">Messages</a>
                    </li>
                    <li class=""><a href="#settings" data-toggle="tab">Settings</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <h4>Intro To MTRH Tab</h4>
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <h4>Profile Tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="messages">
                        <h4>Messages Tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="settings">
                        <h4>Settings Tab</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection
