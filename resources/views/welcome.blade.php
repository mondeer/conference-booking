<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MTRH Conference Room Booking</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="/css/style.css" rel="stylesheet" />
</head>
<body>
    <div class="fh5co-cover fh5co-cover-style-2 js-full-height imond">
      <header>

      </header>
      <!-- HEADER END-->

      <div class="navbar navbar-inverse set-radius-zero">
          <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              </div>
          </div>
      </div>
          <!-- <div class="fh5co-overlay">

          </div> -->
      <!-- LOGO HEADER END-->

      <!-- MENU SECTION END-->
      <div class="content-wrapper">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h4 class="page-head-line">Please Login </h4>

                  </div>

              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Login</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="/login">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                    </div>

                                    <div class="col-md-8 col-md-offset-4">


                                        <a class="btn btn-link" href="/register">
                                            New User? Register
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6">

                  </div>

              </div>
          </div>
      </div>
      <!-- CONTENT-WRAPPER SECTION END-->
    </div>
    <footer>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                  &copy; 2017 MTRH | By : <a href="#" target="_blank">GLADO</a>
              </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="/js/bootstrap.js"></script>
    <script src="/js/main.js"></script>

</body>
</html>
