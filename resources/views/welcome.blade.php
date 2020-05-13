<!doctype html>
<html>

<head>

    <title>Pengaduan Masyarakat</title>
    
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/welcome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">


</head>

<body data-spy="scroll" data-target="#primary-menu">

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('login')}}">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="image">
   <h1 class="heading">Pengaduan Masyarakat Online</h1>
   <h4 class="sub-heading">Pelayanan kami kepada masyarakat</h4>
   <p><a href="{{url('login')}}" class="btn btn-large">Kirim Pengaduan</a></p>
</div>

    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="{{asset('asset/img/service-icon')}}-1.png" alt="">
                        </div>
                        <h4>Jumlah Pengaduan</h4>
                        <p style="font-size: 31px">{{$pengaduan}}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="{{asset('asset/img/portfolio-icon')}}-3.png" alt="">
                        </div>
                        <h4>Jumlah Tanggapan</h4>
                        <p style="font-size: 31px">{{$tanggapan}}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="{{asset('asset/img/portfolio-icon')}}.png" alt="">
                        </div>
                        <h4>Jumlah Akun Masyarakat</h4>
                        <p style="font-size: 31px">{{$masyarakat}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature-area/-->

    <section class="angle-bg sky-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Masuk Akun</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Buat akun atau masuk akun</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="{{asset('asset/img/tambah.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight" style="height: 356px">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Kirim Pengaduan</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>kirim keluhan atau aspirasi anda</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="{{asset('asset/img/kirim.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight" style="height: 356px">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Tanggapan</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Tunggu persetujuan serta tanggapan dari kami</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="{{asset('asset/img/wait.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight" style="height: 356px">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>Langkah Pertama</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                                <strong>Langkah Kedua</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>Langkah Terakhir</strong>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section-padding gray-bg" id="team-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Producer</h2>
                    </div>
                </div>
            </div>
            <div class="row align-center" >
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="{{asset('asset/img/riksa.png')}}" alt="">
                        </div>
                        <h4>RIKSA PARADILA PASA</h4>
                        <h6>DESAINER</h6>
                        <ul class="social-menu">
                            <li><a target="_blank" href="https://web.facebook.com/riksa.paradila.pasa"><i class="ti-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/RiksaParadila"><i class="ti-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/riksaparadilapasa/?hl=ids"><i class="ti-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/riksa-paradila-pasa-922516191/"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="{{asset('asset/img/riksa.png')}}" alt="">
                        </div>
                        <h4>RIKSA PARADILA PASA</h4>
                        <h6>PROGRAMMER</h6>
                        <ul class="social-menu">
                            <li><a target="_blank" href="https://web.facebook.com/riksa.paradila.pasa"><i class="ti-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/RiksaParadila"><i class="ti-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/riksaparadilapasa/?hl=ids"><i class="ti-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/riksa-paradila-pasa-922516191/"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <footer class="footer-area relative gray-bg" id="contact-page">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Riksa Paradila Pasa <i class="ti-heart" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>






    <script src="{{asset('asset/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('asset/js/vendor/bootstrap.min.js')}}"></script>

    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('asset/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('asset/js/scrollUp.min.js')}}"></script>
    <script src="{{asset('asset/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/js/wow.min.js')}}"></script>

    <script src="{{asset('asset/js/main.js')}}"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 500) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
});
    </script>

</body>

</html>
