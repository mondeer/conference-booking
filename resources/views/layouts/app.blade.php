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

        <nav class="navbar imondblue navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="col-md-5"><a class="imondwhite" href="/">Login</a></li>
                            <li class="col-md-6"><a class="imondwhite" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

      <!-- HEADER END-->

      <!-- <div class="navbar navbar-inverse set-radius-zero">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              </div>
          </div> -->
          <!-- <div class="fh5co-overlay">

          </div> -->
      <!-- LOGO HEADER END-->

      <!-- MENU SECTION END-->
      <div class="content-wrapper">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h4 class="page-head-line">Register </h4>

                  </div>

              </div>
              <div class="row">
                  <div class="col-md-6">

                    @yield('content')

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
