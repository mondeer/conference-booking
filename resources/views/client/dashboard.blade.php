<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Conference Booking Management System</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{ url ('/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="{{ url ('/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{ url ('/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset ('admin/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('admin/css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('admin/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{ asset ('admin/css/maruti-style.css')}}" />
    <link rel="stylesheet" href="{{ asset ('admin/css/select2.css')}}" />
    <link rel="stylesheet" href="{{ asset ('admin/css/datepicker.css')}}" class="skin-color" />

</head>
<body class="">
  <div class="imond">


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>conference@mtrh.org
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+254
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar1 navbar-inverse ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="row">

                  <div class="col-md-4">
                    <a class="navbar-brand" href="/">

                        <img src="/img/mtrh.png" width="80" height="80" />
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a class="navbar-brand" href="/">
                        Karibu Sana: <br>{{Sentinel::getUser()->first_name}}
                    </a>
                  </div>

                </div>


            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="#">Dashboard</a></li>
                            <li><a href="#">Available Rooms</a></li>
                            <li><a href="/room/book">Request For a Conference Room</a></li>
                            <li><a href="/rooms/view/bookings">My Bookings</a></li>
                            <li><a href="/logout"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            </li>
                          </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
  </div>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
          @yield('content')
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 MTRH | By : <a href="#" target="_blank">GLADO</a>
                </div>

            </div>
        </div>
    </footer>
    <script src="{{ url ('/js/jquery-1.11.1.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{ url ('/js/bootstrap.js')}}"></script>
    <script src="{{ url ('js/jquery.min.js')}}"></script>
    <script src="{{ url ('js/jquery.ui.custom.js')}}"></script>
    <script src="{{ url ('js/bootstrap.min.js')}}"></script>
    <script src="{{ url ('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{ url ('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ url ('js/jquery.uniform.js')}}"></script>
    <script src="{{ url ('js/select2.min.js')}}"></script>
    <script src="{{ url ('js/maruti.js')}}"></script>
    <script src="{{ url ('js/maruti.form_common.js')}}"></script>

</body>
</html>
