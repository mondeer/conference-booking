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

</head>
<body>
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
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">

                    <img src="/img/mtrh.png" width="100" height="100" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ Auth::user()->name }} <span class="caret"></span></h4>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                System Developer
                                <hr />
                                &nbsp;

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                            </div>
                        </li>


                    </ul>
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
                            <li><a href="/room/create">Request For a Conference Room</a></li>
                            <li><a href="/rooms/bookings">My Bookings</a></li>
                          </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
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
</body>
</html>
