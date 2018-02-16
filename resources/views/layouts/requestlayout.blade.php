<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

	<!-- Meta Tags -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="YourHome - Property and Real Estate HTML Template">
	<meta name="keywords" content="home, house, apartment, agents, business, properties, real estate, real estate agent, residence, single house, single property, villa, rent, land, sell">
	

	<!-- Title -->
	<title>Jemduk</title>
	
	<!-- links included here -->
	@include('layouts.csslinks')
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="page-wrapper">

		
		<!-- Header Start -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 logo">
						<h1>
							<a href="{{route('home')}}"><img src="{{ asset('/clientviews/img/jemduk.png')}}" alt="jemduk">
							Jemduk
							</a>
						</h1>
					</div>
					<div class="col-md-9 col-sm-9 nav-wrapper">

						<!-- Nav Start -->
						<nav>
							<ul class="sf-menu" id="menu">
								<li class="active"><a href="{{route('home')}}">Home <i class="menu-icon zmdi zmdi-home zmdi-hc"></i></a>									
								</li>
								<li>
									<a href="{{ url('/login') }}">Login</i></a>		
								</li>								
								<li><a href="#contact">Contact Us</a></li>						
							</ul>
						</nav>
						<!-- Nav End -->

					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->
		
		@yield('content')

		
		
		<!-- Footer Bottom Start -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 copyright">
						Copyright &copy; 2017, &nbsp;<a href="http://www.Jemduk.com">Jemduk</a>. All Rights Reserved.
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->



		<a href="#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>

	<!-- scripts included here -->
	@include('layouts.scriptlinks')

	</body>
</html>