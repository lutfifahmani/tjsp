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
    <script src="assets/js/jquery-min.js"></script>

         <script src="assets/js/jquery.dataTables.min.js"></script>

    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
  </head>
  <body>

  <!-- Header area wrapper starts -->
    <header id="header-wrap">

      <!-- Roof area starts -->
      
      <!-- Roof area Ends -->

      <!-- Header area starts -->
      <section id="header">

        <!-- Navbar Starts -->
        <nav class="navbar navbar-light" data-spy="affix" data-offset-top="50">
          <div class="container">
            <button class='navbar-toggler hidden-md-up pull-xs-right' data-target='#main-menu' data-toggle='collapse' type='button'>
              ☰
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="{{url('/')}}">
              <img src="{{url('/assets/tjsp/logo.png')}}" class="img-fluid" alt="">
            </a>
            <div class="collapse navbar-toggleable-sm pull-xs-left pull-md-right" id="main-menu">
              <!-- Navbar Starts -->
              <ul class="nav nav-inline">
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="index.html" role="button" aria-haspopup="true" aria-expanded="false">Home</a>                  
                </li>                                                
               
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    CSR Program
                  </a> 
                  <ul class="dropdown-menu"> 
                  <li class="divider"></li>                     
                    <li class="nav-item dropdown">
                       <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Musrenbang </a>
                        <ul class="dropdown-menu" style="left:100%;top:0">
                            <li><a class="dropdown-item" href="#"> Ekonomi</a></li>
                            <li><a class="dropdown-item" href="#"> Sosial Budaya </a></li>
                            <li><a class="dropdown-item" href="#"> Prasarana Wilayah </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                       <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Permohonan Masyarakat </a>
                        <ul class="dropdown-menu" style="left:100%;top:0">
                            <li><a class="dropdown-item" href="#"> Ekonomi</a></li>
                            <li><a class="dropdown-item" href="#"> Sosial Budaya </a></li>
                            <li><a class="dropdown-item" href="#"> Prasarana Wilayah </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                       <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Program Perusahaan </a>
                        <ul class="dropdown-menu" style="left:100%;top:0">
                            <li><a class="dropdown-item" href="#"> Ekonomi</a></li>
                            <li><a class="dropdown-item" href="#"> Sosial Budaya </a></li>
                            <li><a class="dropdown-item" href="#"> Prasarana Wilayah </a></li>
                        </ul>
                    </li>
                  </ul> 
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/laporan')}}">
                    Laporan
                  </a>                                      
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/perusahaan')}}">
                    Perusahaan
                  </a>                                      
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Berita
                  </a>                                      
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Galeri
                  </a>                                      
                </li> 
                <a href="{{url('/ajukan-permohonan')}}" class="btn btn-success">AJUKAN PERMOHONAN</a>          
              </ul>  
            </div>              
              <!-- Form for navbar search area -->
              <form class="full-search">
                <div class="container">
                  <input type="text" placeholder="Type to Search">
                  <a href="#" class="close-search">
                    <span class="fa fa-times fa-2x">
                    </span>
                  </a>
                </div>
              </form>
              <!-- Search form ends -->
          </div>
        </nav>
        <!-- Navbar Ends -->

      </section> 
    <!-- Start Content -->
<!-- BOF MAIN -->
        <div class="container">
        @yield('content')
          <!-- BOF MAIN -->
        </div>
    <!-- Footer Section -->
    <footer>
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row section">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-xs-12 wow fadeIn">
            <h3 class="small-title">
              ABOUT US
            </h3>
            <p>
              Etiam ornare condimentum massa et scelerisque. Mauris nibh ipsum, laoreet at venenatis ac, rutrum sed risus, 
            </p> 
            <p>Aliquam magna nibh, mattis a urna nec. Semper venenatis magna.</p>
            <div class="social-footer">
              <a href="#"><i class="fa fa-facebook icon-round"></i></a>
              <a href="#"><i class="fa fa-twitter icon-round"></i></a>
              <a href="#"><i class="fa fa-linkedin icon-round"></i></a>
              <a href="#"><i class="fa fa-google-plus icon-round"></i></a>
            </div>           
          </div><!-- Footer Widget Ends -->
          
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".2s">
            <h3 class="small-title">
              TWITTER
            </h3>
            <ul class="recent-tweets">
              <li class="tweet">
                My <a href="#">@Quora</a>                
                <span class="tweet-text">
                  answer to What's the best FAQ plugin for WordPress?
                </span>
                <a href="#">qr.ae/RFTbIGa</a> 
                <span class="tweet-date">
                  August 21, 2015 10:29pm
                </span>
              </li>
              
              
              <li class="tweet">
                WPB Advanced FAQ | Probably The Best WordPress FAQ Plugin <a href="#">wpbean.com/wpb-advanced-faq-pr…</a>               
                <span class="tweet-text">
                  via
                </span>
                <a href="#">@wpbean</a> 
                <span class="tweet-date">
                  August 19, 2015 8:49 am
                </span>
              </li>
              
              
            </ul>
          </div><!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".5s">
            <h3 class="small-title">
              GALLERY
            </h3>
            <div class="plain-flicker-gallery">
              <a href="#" title="Pan Masala"><img src="assets/img/flicker/img1.jpg" alt=""></a>
              <a href="#" title="Sports Template for Joomla"><img src="assets/img/flicker/img2.jpg" alt=""></a>
              <a href="" title="Apple Keyboard"><img src="assets/img/flicker/img3.jpg" alt=""></a>
              <a href="" title="Hard Working"><img src="assets/img/flicker/img4.jpg" alt=""></a>
              <a href="" title="Smile"><img src="assets/img/flicker/img5.jpg" alt=""></a>
              <a href="" title="Puzzle"><img src="assets/img/flicker/img6.jpg" alt=""></a>
            </div>
          </div><!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".8s">
            <h3 class="small-title">
              SUBSCRIBE US
            </h3>
            <div class="contact-us">
              <p>Tellus aliquam at. Pellentesque gravida vel eros et pretium</p>
              <form>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
              </div>
              <button type="submit" class="btn btn-common">Submit</button>
            </form>
            </div>
          </div><!-- Footer Widget Ends -->
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
      
      <!-- Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <p class="copyright-text">
                ©  2016 Engage. All right reserved. Designed with by <a href="#">GrayGrids</a>
              </p>
            </div>
            <div class="col-md-6  col-sm-6">
              <ul class="nav nav-inline pull-xs-right">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sitemap</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Terms of services</a>
                </li>
              </ul>        
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
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Text Rotator-->

    
    <script src="assets/js/jquery.mixitup.js"></script>
    <!--WOW Scroll Spy-->
    <script src="assets/js/wow.js"></script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.js"></script>
 
    <!-- WayPoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- CounterUp -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- ScrollTop -->
    <script src="assets/js/scroll-top.js"></script>
    <!-- Appear -->
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.vide.js"></script>
     <!-- All JS plugin Triggers -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/color-switcher.js"></script>


    
  </body>
</html>