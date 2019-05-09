
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	{{-- <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"> --}}
	<link rel="icon" type="image/png" sizes="96x66" href="assets/img/logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Animation library for notifications   -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!--  Paper Dashboard core CSS    -->
    <link rel="stylesheet" href="{{ asset('assets/css/paper-dashboard.css') }}">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <!--  Fonts and icons     -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    {{-- Data tables --}}
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="warning">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/home') }}" class="simple-text">
                    <img src="../../assets/img/fav_waralabaku.png" alt="Trulli" width="40" height="26">
                    <h6> WARALABAKU </h6>
                </a>
            </div>
            <div id="sideDiv">
            <ul class="nav">
                <li class="inactive" id="dbLi">
                    <a class="dbBtn" href="{{ url('/home') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="inactive" id="dwLi">
                    <a class="dwBtn" href="{{ url('/datawaralaba') }}">
                        <i class="ti-view-grid"></i>
                        <p>Data Waralaba</p>
                    </a>
                </li>
                <li class="inactive" id="dboLi">
                    <a class="dboBtn" href="{{ url('/bobot') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Data Bobot</p>
                    </a>
                </li>
                <li class="inactive" id="daLi">
                    <a class="daBtn" href="{{ url('/attribut') }}">
                        <i class="ti-layout-accordion-merged"></i>
                        <p>Data Attribut</p>
                    </a>
                </li>
                <li class="inactive" id="dnuLi">
                    <a class="dnuBtn" href="{{ url('/nilaiutility') }}">
                        <i class="ti-layout-grid2-thumb"></i>
                        <p>Data Nilai Utility</p>
                    </a>
                </li>
                <li class="inactive" id="dhLi">
                    <a class="dhBtn" href="{{ url('/result') }}">
                        <i class="ti-layout-list-thumb-alt"></i>
                        <p>Data Hasil</p>
                    </a>
                </li>
            </ul>
            </div>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
									<p>Account</p>
									<b class="caret"></b>
                                </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">My Account</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <div class="navbar-brand">@yield('dashboardTitle')</div>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                {{-- CONTENT ISI --}}
                @yield('content')
            </div>
        </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-right">
                        <ul>

                            <li>
                                <a href="{{ url('/about') }}">
                                    About
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-left">
                        &copy; <script>document.write(new Date().getFullYear())</script> Waralabaku Project 
                    </div>
                </div>
            </footer>
        </div>

    </div>

</body>

    <!--   Core JS Files   -->
    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
	<script src={{ asset('assets/js/bootstrap.min.js') }} type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
    <script src={{ asset('assets/js/bootstrap-checkbox-radio.js') }}></script>
    
    {{-- Data Tables --}}
    <script src={{ asset('assets/js/jquery.dataTables.js') }}></script>
    <script src={{ asset('assets/js/dataTables.bootstrap.js') }}></script>

    <!--  Notifications Plugin    -->
    <script src={{ asset('assets/js/bootstrap-notify.js') }}></script>

    <script src={{ asset('assets/js/paper-dashboard.js') }}></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    {{-- <script src={{  }}"assets/js/demo.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            
        });
    </script> --}}
</html>
