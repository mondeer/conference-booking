@extends('admin.admindash')

@section('admin')
  <div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Personal-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="/system/roomreg" method="POST" class="form-horizontal">
              {{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Name Of Room :</label>
                <div class="controls">
                  <input type="text" class="span11" name="room_name" placeholder="Name of Conference Room" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">COnference Room Number :</label>
                <div class="controls">
                  <input type="number" class="span11" name="room_number" placeholder="Room Number" />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Room Capacity :</label>
                <div class="controls">
                  <input type="number" name="capacity" class="span11" placeholder="Capacity of the Room" />
                  <span class="help-block">*Capacity</span> </div>
                </div>
              

              <div class="form-actions">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection
