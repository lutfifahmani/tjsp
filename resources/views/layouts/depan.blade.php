<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Forum TJSP Samarinda</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">

    
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/responsive.css')}}">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="{{url('assets/fonts/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{url('assets/fonts/simple-line-icons.css')}}">    
     
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/extras/owl/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/extras/owl/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/extras/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/extras/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/extras/settings.css')}}">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/green.css')}}" media="screen" />       

        <!-- jQuery Load -->
    <script src="{{url('assets/js/jquery-min.js')}}"></script>

         <script src="{{url('assets/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{url('assets/js/dataTables.bootstrap4.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{url('lightcase/css/lightcase.css')}}">
    <script type="text/javascript" src="{{url('lightcase/js/lightcase.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->

 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfABetKI4MFj5kvDBkHEXP9jcW-GoAK3I&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }

       #floating-panel {
       
          top: 10px;
          left: 25%;
          z-index: 5;
          background-color: #fff;
          padding: 5px;
          border: 1px solid #999;
          text-align: center;
          font-family: "Roboto", "sans-serif";
          line-height: 30px;
          padding-left: 10px;
        }
    </style>

  </head>
  <body>

    <header id="header-wrap">

<div class="header-navbar" style="border-bottom: 1px dashed green">
<div class="navbar-area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="{{url('/')}}">
    <img src="{{url('/assets/tjsp/logo.png')}}" class="img-fluid" style="max-height: 60px" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
                  <a href="{{url('/profil')}}">Profil</a>                  
  </li>
<li class="nav-item">
<a href="#">CSR Program</a>
<ul class="sub-menu">
<li><a href="#">Musrenbang</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/musrenbang/ekonomi')}}"> - Ekonomi</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/musrenbang/sosial-budaya')}}"> - Sosial Budaya</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/musrenbang/prasarana-wilayah')}}"> - Prasarana Wilayah</a></li>

<li><a href="#">Permohonan Masyarakat</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/permohonan-masyarakat/ekonomi')}}"> - Ekonomi</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/permohonan-masyarakat/sosial-budaya')}}"> - Sosial Budaya</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/permohonan-masyarakat/prasarana-wilayah')}}"> - Prasarana Wilayah</a></li>

<li><a href="#">Program Perusahaan</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/program-perusahaan/ekonomi')}}"> - Ekonomi</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/program-perusahaan/sosial-budaya')}}"> - Sosial Budaya</a></li>
<li style="padding-left: 10px"><a href="{{url('/csr/program-perusahaan/prasarana-wilayah')}}"> - Prasarana Wilayah</a></li>

</ul> 
</li>
<li class="nav-item">
    <a href="{{url('/laporan')}}">
                    Laporan
    </a>  
</li>

<li class="nav-item">
    <a href="{{url('/perusahaan')}}">
                    Perusahaan
    </a>  
</li>

<li class="nav-item">
    <a href="{{url('/berita')}}">
                    Berita
    </a>  
</li>

<li class="nav-item">
    <a href="{{url('/galeri')}}">
                    Galeri
    </a>  
</li>


    <a href="{{url('/ajukan-permohonan')}}" type="button" class="btn btn-success" style="padding: 20px 10px">AJUKAN PERMOHONAN</a>  


</nav> 
</div>
</div> 
</div> 
</div> 
</div>

 
      </section> 
    <!-- Start Content -->
<!-- BOF MAIN -->
        <div class="main">
        @yield('content')
          <!-- BOF MAIN -->
        </div>
    <!-- Footer Section -->
    <footer style="background-color: #920b12e6">
      <!-- Container Starts -->
      <div class="container" style="height: 50px">
        <!-- Row Starts -->
        <div class="row section">
          
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
      
      <!-- Copyright -->
      <div id="copyright" style="background-color: #28a745;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <p class="copyright-text" style="color: white">
                ©  2020 Forum TJSP Kota Samarinda. Support by <a href="#" style="color:green">Karkit DEV</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright  End-->
      
    </footer>
    <!-- Footer Section End-->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up">
      </i>
    </a>

    <div class="bottom"> <a href="#" class="settings"></a> </div>

    <!-- JavaScript & jQuery Plugins -->
    
    <!-- Bootstrap JS -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!--Text Rotator-->

    
    <script src="{{url('assets/js/jquery.mixitup.js')}}"></script>
    <!--WOW Scroll Spy-->
    <script src="{{url('assets/js/wow.js')}}"></script>
    <!-- OWL Carousel -->
    <script src="{{url('assets/js/owl.carousel.js')}}"></script>
 
    <!-- WayPoint -->
    <script src="{{url('assets/js/waypoints.min.js')}}"></script>
    <!-- CounterUp -->
    <script src="{{url('assets/js/jquery.counterup.min')}}.js"></script>
    <!-- ScrollTop -->
    <script src="{{url('assets/js/scroll-top.js')}}"></script>
    <!-- Appear -->
    <script src="{{url('assets/js/jquery.appear.js')}}"></script>
    <script src="{{url('assets/js/jquery.vide.js')}}"></script>
     <!-- All JS plugin Triggers -->
    <script src="{{url('assets/js/main.js')}}"></script>

    
  </body>
</html>