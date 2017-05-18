@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/register">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="col-md-4 control-label">User Role</label>

                            <div class="col-md-6">
                                <select class="form-control" name="role">
                                  <option></option>
                                  <option value="admin">Admin</option>
                                  <option value="departmental">Departmental Head</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
