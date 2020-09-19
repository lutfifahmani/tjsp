<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Forum TJSP Samarinda</title>

    <!-- Scripts -->


  
  
<!-- Styles -->

        <script src="{{ asset('js/app.js') }}" defer></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/summernote-lite.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.js" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <!-- include libraries(jQuery, bootstrap) -->

</head>
<body class="theme-blue">
    <div class="grid-wrapper sidebar-bg bg1">

        <!-- BOF HEADER -->
        <div class="header">
            <div class="header-bar">
                <div class="brand">
                    <a href="{{ url('/') }}" class="logo"><span class="text-carolina">TJSP</span> Samarinda</a>
                    <a href="{{ url('/') }}" class="logo-sm text-carolina" style="display: none;"></a>
                </div>
                <div class="btn-toggle">
                    <!-- <a href="#" class="toggle-sidebar-btn"><i class="ti-arrow-circle-left"></i></a> -->
                    <a href="#" class="slide-sidebar-btn" style="display: none;"><i class="ti-menu"></i></a>
                </div>
                @guest
               @else
                <div class="navigation d-flex">

                    <!-- 
                    <form class="navbar-search" role="search" method="post" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="ti-search"></i></div>
                            </div>
                            <input type="text" placeholder="Search for keywords" class="form-control" name="top-search"
                                id="top-search">
                        </div>
                    </form>
                   EOF Header Search -->

                    <!-- BOF Header Nav -->
                    <div class="navbar-menu d-flex">
                        <!--
                        <div class="menu-item">
                            <a href="#" class="btn" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <span class="badge badge-pill badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-alert">
                                <li class="dropdown-header text-center"><a href="#"><i class="ti-comment-alt"></i> View
                                        All Alerts <i class="ti-angle-right"></i></a></li>
                                <li><a href="#"><i class="fa fa-user"></i> New user registered <span>Just now</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-calendar-plus-o"></i> New event created <span>5 min
                                            ago</span></a></li>
                                <li><a href="#"><i class="fa fa-area-chart"></i> Report ready to download <span>1 day
                                            ago</span></a></li>
                                <li><a href="#"><i class="fa fa-bank"></i> Bill payment reminder <span>1 day
                                            ago</span></a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> Staff meeting <span>3 days ago</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-item">
                            <a href="#" class="btn" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <span class="badge badge-pill badge-success">7</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-message">
                                <li class="dropdown-header text-center"><a href="#"><i class="ti-comments"></i> View All
                                        Messages <i class="ti-angle-right"></i></a></li>
                                <li>
                                    <img src="assets/img/profile/profile-04.jpg">
                                    <div class="message-row">
                                        <small>24h ago</small>
                                        <a href="#"><span class="message-user">Pear Appleton</span><br>
                                            Staff meeting on Tuesday at 4PM, remember to set date</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/img/profile/profile-07.jpg">
                                    <div class="message-row">
                                        <small>2h ago</small>
                                        <a href="#"><span class="message-user">siQuang Humbleman</span><br>
                                            RE: Remember to generate PNL for October</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/img/profile/profile-06.jpg">
                                    <div class="message-row">
                                        <small>3d ago</small>
                                        <a href="#"><span class="message-user">Lemony Tang</span><br>
                                            Appointment with lawyer, better call Saul!</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/img/profile/profile-07.jpg">
                                    <div class="message-row">
                                        <small>4d ago</small>
                                        <a href="#"><span class="message-user">siQuang Humbleman</span><br>
                                            Theme designed by siQuang for siQthemes</a>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                        <div class="menu-item">
                            <a href="#" class="btn right-sidebar-toggle"><i class="ti-user"></i></a>
                        </div>
                    </div>
                    <!-- EOF Header Nav -->

                </div>
                @endguest
            </div>
        </div>
        <!-- EOF HEADER -->
     <!-- ASIDE RIGHt -->
     <div id="sidebar-right">
            <div class="sidebar-right-container">

                <!-- BOF TABS 
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#tab-1" data-toggle="tab" class="nav-link active">Profile</a>
                    </li> -->
                  <!--  <li>
                        <a href="#tab-2" data-toggle="tab" class="nav-link">Settings</a>
                    </li>
                    <li>
                        <a href="#tab-3" data-toggle="tab" class="nav-link">Help</a>
                    </li> 
                </ul>-->
                <!-- EOF TABS -->

                <!-- BOF TAB PANES -->
                <div class="tab-content">
                    <!-- BOF TAB-PANE #1 -->
                    <div id="tab-1" class="tab-pane show active">
                        <div class="pane-header">
                            <h3><i class="ti-user"></i> User Panel</h3>
                            <i class="fa fa-circle text-success"></i> <span class="profile-user">{{ Auth::user()->name }}</span>
                            <span class="float-right"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="text-carolina">Log-Out</a></span>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                        <div class="pane-body">
                            <div class="card bg-transparent mb-3">
                                <ul class="list-group list-group-flush">
                              <!--      <li class="list-group-item">
                                        <h5 class="mb-3">My Theme</h5>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn switch-theme btn-light" data-theme="theme-default">Light</button>
                                            <button type="button" class="btn switch-theme btn-dark" data-theme="theme-dark">Dark</button>
                                        </div>
                                    </li> -->
                                    <li class="list-group-item">
                                        <h5 class="mb-3">My Profile</h5>
                                        <form class="form-update-profile">
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Nama:</label>
                                                <div class="col">
                                                    <input type="text" name="first_name" class="form-control-plaintext"
                                                        value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Email:</label>
                                                <div class="col">
                                                    <input type="text" name="email" class="form-control-plaintext"
                                                        value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Password:</label>
                                                <div class="col">
                                                    <input type="password" name="password" class="form-control-plaintext"
                                                        value="{{ Auth::user()->password }}">
                                                </div>
                                            </div>
                                            <div class="col offset-md-4 pl-2">
                                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </li>
                                 <!--   <li class="list-group-item">
                                        <h5 class="mb-3">
                                            Messages
                                            <span class="badge badge-pill badge-info pull-right">4</span>
                                        </h5>
                                        <div class="message-group d-flex flex-row mb-3">
                                            <a href="#"><img src="assets/img/profile/profile-01.jpg" class="rounded"
                                                    alt="image"></a>
                                            <div class="message-item">
                                                <small class="text-carolina">Today 3:30 pm</small><br>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </div>
                                        </div>
                                        <div class="message-group d-flex flex-row mb-3">
                                            <a href="#"><img src="assets/img/profile/profile-03.jpg" class="rounded"
                                                    alt="image"></a>
                                            <div class="message-item">
                                                <small class="text-carolina">Today 12:45 pm</small><br>
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                ut aliquip aute irure dolor in.
                                            </div>
                                        </div>
                                        <div class="message-group d-flex flex-row mb-3">
                                            <a href="#"><img src="assets/img/profile/profile-02.jpg" class="rounded"
                                                    alt="image"></a>
                                            <div class="message-item">
                                                <small class="text-carolina">Yesterday 5:20 pm</small><br>
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur.
                                            </div>
                                        </div>
                                        <div class="message-group d-flex flex-row">
                                            <a href="#"><img src="assets/img/profile/profile-05.jpg" class="rounded"
                                                    alt="image"></a>
                                            <div class="message-item">
                                                <small class="text-carolina">Tuesday 2:20 pm</small><br>
                                                Sunt in culpa qui officia deserunt mollit anim est laborum voluptate.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <h5>Upcoming Events</h5>
                                        <p class="card-text">for Monday - February 25, 2019</p>
                                        <div class="profile-calendar">
                                            <table class="table table-bordered table-hover table-sm">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Schedule</th>
                                                        <th scope="col">Events</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>All-day</td>
                                                        <td><i class="fa fa-circle text-info"></i> Project concept</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10:00 am</td>
                                                        <td><i class="fa fa-circle text-info"></i> Staff meeting</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2:50 pm</td>
                                                        <td><i class="fa fa-circle text-warning"></i> Send out report
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4:30 pm</td>
                                                        <td><i class="fa fa-circle text-danger"></i> Appointment with
                                                            Tang</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- EOF TAB-PANE #1 -->

                    <!-- BOF TAB-PANE #2 
                    <div id="tab-2" class="tab-pane">
                        <div class="pane-header">
                            <h3><i class="ti-settings"></i> Settings</h3>
                            Application Settings
                            <span class="float-right"><a href="#" class="text-carolina">Log-Out</a></span>
                        </div>
                        <div class="pane-body">
                            <div class="card bg-transparent mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h5 class="text-carolina"><i class="ti-user"></i> User Settings</h5>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm">
                                        Notifications
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm"> Dashboard
                                        Graphs
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm" data-on="Yes"
                                            data-off="No"> Get Daily Feed
                                    </li>
                                    <li class="list-group-item">
                                        <h5 class="text-carolina"><i class="ti-world"></i> Global Settings</h5>
                                        Global settings are only accessible by a super administrator or admin group.
                                        These settings control the application globally.
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes" data-off="No">
                                        Show Subscription
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm"> SMTP Server
                                        <div class="row mt-3">
                                            <div class="input-group input-group-sm col">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">SMTP</span>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm" data-on="Yes"
                                            data-off="No"> Send Out Daily Report
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes" data-off="No">
                                        Send Daily Cron Report
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes" data-off="No">
                                        Backup Database Daily
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     EOF TAB-PANE #2 -->

                    <!-- BOF TAB-PANE #3 
                    <div id="tab-3" class="tab-pane">
                        <div class="pane-header">
                            <h3><i class="ti-agenda"></i> Help</h3>
                            Frequently Asked Questions
                            <span class="float-right"><a href="#" class="text-carolina">Log-Out</a></span>
                        </div>
                        <div class="pane-body">
                            <div class="accordion" id="faq-example">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#faq1">
                                                Frequently Asked Question #1
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq1" class="collapse show" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq2">
                                                Frequently Asked Question #2
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq2" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq3">
                                                Frequently Asked Question #3
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq3" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq4">
                                                Frequently Asked Question #4
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq4" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq5">
                                                Frequently Asked Question #5
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq5" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq6">
                                                Frequently Asked Question #6
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq6" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq7">
                                                Frequently Asked Question #7
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq7" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   EOF TAB-PANE #3 -->
                </div>
                <!-- EOF TAB PANES -->

            </div>
        </div>
     <!-- end -->

             <!-- BOF ASIDE-LEFT -->
        <div id="sidebar" class="sidebar">
            <div class="sidebar-content">
                <!-- sidebar-menu  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            Menu
                        </li>
                        <li class="">
                            <a href="{{ url('/') }}">
                                <i class="ti-dashboard"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="maincat">
                            <a href="#">
                                <i class="ti-files"></i>
                                <span class="menu-text">Berita</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li>
                                        <a href="{{url('/tambah-berita')}}">Tambah Berita</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{url('/list-berita')}}">Daftar Berita</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="maincat">
                            <a href="#">
                                <i class="ti-write"></i>
                                <span class="menu-text">Laporan</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li>
                                        <a href="{{url('/tambah-laporan')}}">Tambah Laporan</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{url('/list-laporan')}}">Daftar Laporan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="">
                            <a href="{{url('/list-gallery')}}">
                                <i class="ti-image"></i>
                                <span class="menu-text">Galeri</span>
                            </a>
                        </li>
                        <li class="maincat">
                            <a href="#">
                                <i class="ti-world"></i>
                                <span class="menu-text">Perusahaan</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li>
                                        <a href="tambah-perusahaan">Tambah Perusahaan</a>
                                    </li>
                                    <li>
                                        <a href="list-perusahaan">Daftar Perusahaan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="list-pengajuan">
                                <i class="ti-layout-grid2"></i>
                                <span class="menu-text">Daftar Pengajuan</span>
                            </a>
                        </li>
                       
                        <li class="header-menu">
                            Halaman
                        </li>
                        <li class="">
                            <a href="{{url('ubah-profil')}}">
                                <i class="ti-crown"></i>
                                <span class="menu-text">Profil Forum TJSP</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('lihat-inbox')}}">
                                <i class="ti-email"></i>
                                <span class="menu-text">Kotak Masuk Forum TJSP</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </div>
        <!-- EOF ASIDE-LEFT -->


        <!-- BOF MAIN -->
        <div class="main">
        @yield('content')
          <!-- BOF MAIN -->
        </div>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<div class="footer">
            
            <p class="text-center" style="color: white">Copyright © 2020-2021 Forum TJSP Samarinda. All rights reserved.</p>
        </div>
        
        <!-- Preloader -->
        <div id="preloader"></div>
</body>
</html>


