<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
  

    <title></title>

    <!-- Scripts -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive-table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/button.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/form.css')}}">

    <!-- Fonts -->

</head>
<body>
    <div id="app">
        <div class="topnav" id="myTopnav" style="z-index: 10;">
          <a href="{{url('/')}}" class="active">Pengaduan Masyarakat</a>
          <div class="link">
            <a href="{{url('masyarakat/home')}}">Pengaduan</a>
            <a href="{{url('masyarakat/tanggapan')}}">Tanggapan</a>
          </div>
          <div class="dropdown">
            <button class="dropbtn">
              <i class="fa fa-user"></i>  
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">{{Session::get('username')}}</a>
              <a href="{{url('logout')}}">Logout</a>
            </div>
          </div> 
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

  <script src="{{asset('asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });
      
    
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
</body>
</html>
