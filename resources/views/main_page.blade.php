<!DOCTYPE HTML>

<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Sistem Informasi Tugas Studio Perencanaan Arsitektur</title>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="{{ url('/assets/css/normalize.css') }}" media="screen">
	<link rel="stylesheet" href="{{ url('/assets/css/grid.css') }}" media="screen">
	<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" media="screen">
	<link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}" media="screen">
	<link rel="stylesheet" href="{{ url('/assets/plugin/font-awesome/css/font-awesome.css') }}" media="screen">
	<!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" media="screen"> -->
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
	<div class="menu">
		<div class="container clearfix">
			<div id="nav" class="grid_11 omega">
				<ul class="navigasi">
					<li data-slide="1">Home</li>
					<li data-slide="2">About</li>
					<li data-slide="3">Blog</li>	
				</ul>
				<ul class="navigation">
					<li>
						@if (Route::has('login'))
						@auth
                        <a href="{{ url('/home') }}">Home</a>
                         @else
						<a href="{{ route('login') }}">Login</a></li>
						@if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    @endif
				</ul>
			</div>

		</div>
	</div>

	<div class="slide" id="slide1" data-slide="7" data-stellar-background-ratio="0.5">		
		<div class="container clearfix">
			<center>
			<div id="content" class="grid_12">
				<h1>Sistem Informasi Studio Perencanaan Arsitektur</h1>
				<h2>Institut Teknologi Sumatera</h2>
			</div>
			</center>
		</div>
	</div>



	<div class="slide" id="blogs" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Blogs</h2>
			<p class="heading"></p>
		</div>
	</div>
    
    <div class="slide" id="contact" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>About</h2>
			<p class="heading"></p>
			<div>
				<div class="grid_0 omega">
					<p></p>
					<p></p>
				</div>
			</div>

		</div>
	</div>


    <footer>
    	<div class="container clearfix">
        <center>
    	<li style="font-size: 15px; font-family: inherit; letter-spacing: 0px;">Develop By Teknik Informatika</li>
        </center>
    </div>
    </footer>
	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="{{ url('/assets/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ url('/assets/js/waypoints.min.js') }}"></script>
	<script src="{{ url('/assets/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ url('/assets/js/scripts.js') }}"></script>
	

	<script type="text/javascript" src="{{ url('/assets/js/scripts.min.js') }}"></script>
</body>
</html>
