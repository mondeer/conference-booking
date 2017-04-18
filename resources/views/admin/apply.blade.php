@extends('admin.dashboard')

@section('content')
      <div class="row">
          <div class="col-md-12">
              <h1 class="page-head-line">Request For A Conference Room</h1>
          </div>
      </div>

      <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
             <form class="form-horizontal" method="POST" action="/room">

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                  <label>Employee Name</label>
                  <input type="text" class="form-control" name="emp_name" value="{{old('emp_name')}}" placeholder="Employee Name" />
                </div>

                <hr>

                <div class="form-group">
                  <label class="col-md-2">Email</label>
                  <div class="">
                    <input class="col-md-4 form-control" type="text" name="email" value="{{old('email')}}" placeholder="Employee Email" />
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label for="exampleInputPassword1">Personal Number</label>
                  <input type="text" class="form-control" name="pf" value="{{old('pf')}}" placeholder="Personal Number" />
                </div>

                <hr>

                <div class="form-group">
                  <label class="col-md-4">Departments</label>
                  <div class="">
                    <select class="col-md-3" name="department">
                      <option></option>
                      <option>ICT</option>
                      <option>Supplies</option>
                      <option>Nursing</option>
                      <option>Records</option>
                      <option>House Keeping</option>
                    </select>
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label class="col-md-4">Conference Room</label>
                  <div class="">
                    <select class="col-md-3" name="room">
                      <option></option>
                      <option>Room 1</option>
                      <option>Room 2</option>
                      <option>Room 3</option>
                      <option>Room 4</option>
                    </select>
                  </div>
                </div>

                <hr>

                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form>
          </div>
          </div>
      </div>
@endsection
