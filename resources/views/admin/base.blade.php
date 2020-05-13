<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengaduan Masyarakat</title>
  <link rel="stylesheet" href="{{asset('asset/css/admin-sidebar.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive-table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/button.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/dashboard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/form.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
  <head>
 
  </head>
  <body><div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-user-circle fa-2x"></i>
                        <span class="nav-text">
                            {{Session::get('username')}}
                        </span>
                    </a>
                    
                </li>
            </ul>
                
            <ul style="margin-top: 20px">
                <li>
                    <a href="{{url('admin/home')}}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="{{url('admin/petugas')}}">
                        <i class="fa fa-user-shield fa-2x"></i>
                        <span class="nav-text">
                            Petugas
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{url('admin/masyarakat')}}">
                       <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            Masyarakat
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{url('admin/pengaduan')}}">
                       <i class="fa fa-exclamation fa-2x"></i>
                        <span class="nav-text">
                            Pengaduan
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="{{url('admin/tanggapan')}}">
                        <i class="far fa-comments fa-2x"></i>
                        <span class="nav-text">
                            Tanggapan
                        </span>
                    </a>
                </li>
                
            </ul>

            <ul class="logout">
                <li>
                   <a href="{{ url('logout') }}">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

  <script src="{{asset('asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });
      
    </script>

  </body>
    </html>
<!-- partial -->
  
</body>
</html>
