
<!DOCTYPE html>
<html lang="en">
<head>
<title>MTRH Conference Room Booking</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset ('admin/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset ('admin/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset ('admin/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ asset ('admin/css/maruti-style.css')}}" />
<link rel="stylesheet" href="{{ asset ('admin/css/maruti-media.css')}}" class="skin-color" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="/system/admin">MTRH</a></h1>
</div>

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon icon-share-alt"></i> <span class="text">
        Logout

    </span></a>
    <form id="logout-form" action="/logout" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    </li>
  </ul>
</div>
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-Header-menu-->

<div id="sidebar">
  <ul>
    <li class="active"><a href="/system/admin" title="The Administrator"><i class="icon icon-th-large"></i> <span>The Admin Panel</span></a> </li>
    <li> <a href="/manage/schedules"><i class="icon icon-calendar"></i> <span>Manage Schedules</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Manage Conference Rooms</span> <span class=""><i class="icon icon-chevron-down"></i></span></a>
      <ul>
        <li><a href="/system/rooms/view">Available Rooms</a></li>
        <li><a href="/system/roomreg">Register New Room</a></li>
        <li><a href="/system/rooms/view">Remove Room </a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div class="container-fluid">
   	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="/system/rooms/view"> <i class="icon-look"></i>Board Rooms</a> </li>
          <li> <a href="#"> <i class="icon-web"></i>New Board Room </a> </li>
          <li> <a href="#"> <i class="icon-people"></i>Manage Bookings </a> </li>
        </ul>
   </div>

   @yield('admin')

  </div>
</div>

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Conference Booking. Brought to you by <a href="#">Glado</a> </div>
</div>
<script src="{{ url ('admin/js/excanvas.min.js')}}"></script>
<script src="{{ url ('admin/js/jquery.min.js')}}"></script>
<script src="{{ url ('admin/js/jquery.ui.custom.js')}}"></script>
<script src="{{ url ('admin/js/bootstrap.min.js')}}"></script>
<script src="{{ url ('admin/js/jquery.flot.min.js')}}"></script>
<script src="{{ url ('admin/js/jquery.flot.resize.min.js')}}"></script>
<script src="{{ url ('admin/js/jquery.peity.min.js')}}"></script>
<script src="{{ url ('admin/js/fullcalendar.min.js')}}"></script>
<script src="{{ url ('admin/js/maruti.js')}}"></script>
<script src="{{ url ('admin/js/maruti.dashboard.js')}}"></script>
<script src="{{ url ('admin/js/maruti.chat.js')}}"></script>

      <script>
          $(".delete").on("submit", function(){
            return confirm("You are About permanently delete Room, Continue?");
          });
      </script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
