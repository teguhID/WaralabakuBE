{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Waralabaku</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="btn btn-outline-primary" href="{{ url('/datawaralaba') }}"> Data Waralaba <span class="sr-only">(current)</span></a>
                        <a class="btn btn-outline-primary" href="{{ url('/bobot') }}">Data Bobot</a>
                        <a class="btn btn-outline-primary" href="{{ url('/attribut') }}">Data Attribut</a>
                        <a class="btn btn-outline-primary" href="{{ url('/nilaiutility') }}">Data Nilai Utility</a>
                        <a class="btn btn-outline-primary" href="{{ url('/result') }}">Data Result</a>
                    </div>
                </div>
        </nav></br>
    
        <div class="d-flex justify-content-center">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
</body>
</html> --}}


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                    WARALABAKU
                </a>
            </div>
            <div id="sideDiv">
            <ul class="nav">
                <li class="dbLi active">
                    <a class="dbBtn" href="{{ url('/') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="dwLi inactive">
                    <a class="dwBtn" href="{{ url('/datawaralaba') }}">
                        <i class="ti-view-grid"></i>
                        <p>Data Waralaba</p>
                    </a>
                </li>
                <li class="dboLi inactive">
                    <a class="dboBtn" href="#">
                        <i class="ti-view-list-alt"></i>
                        <p>Data Bobot</p>
                    </a>
                </li>
                <li class="daLi inactive">
                    <a class="daBtn" href="#">
                        <i class="ti-layout-accordion-merged"></i>
                        <p>Data Attribut</p>
                    </a>
                </li>
                <li class="dnuLi inactive">
                    <a class="dnuBtn" href="#">
                        <i class="ti-layout-grid2-thumb"></i>
                        <p>Data Nilai Utility</p>
                    </a>
                </li>
                <li class="dhLi inactive">
                    <a class="dhBtn" href="#">
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
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </li>
						</ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row"> {{-- CONTENT PERTAMA --}}
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Data</p>
                                            0 Items
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-crown"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Standing</p>
                                            1. Name
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
                {{-- CONTENT ISI --}}
                @yield('content')
            </div>
        </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-right">
                        <ul>

                            <li>
                                <a href="#">
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
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
    <script type="text/javascript">
    	    $('#dbBtn, #dwBtn').click(function () {
                if (this.id == 'dbBtn') {
                    alert('Submit 1 clicked');
                }
                else if (this.id == 'sudwBtnbmit2') {
                    alert('Submit 2 clicked');
                }
            });
    </script>

</html>
