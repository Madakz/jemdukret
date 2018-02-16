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
	<style>
		div.col-md-10.search-property a div.row{
			background-color: #D4D4D4;
			font-size: 17px;
			font-weight: 30px;
			color:#188ae2;
		}

		div.col-md-10.search-property a:hover div.row{
			color: #fff;
			background-color:#878787;
			/*background-color:#3399FF;*/
		}

		div#suggesstion-box ul#suggestions{
			background-color: #D4D4D4;
			color:#000;
			width: calc(100% - 20px);
			border-radius: 2px;
		}
		div#suggesstion-box ul#suggestions li:hover{
			background-color: #878787;
			color:#fff;
			background-size: 70px;
		}
		div#suggesstion-box ul#suggestions li hr{
			margin-top:0px;
			/*padding: 0px;*/
		}
		header.sticky{
			margin:0px;
		}
	</style>
	<body>
		
		<div id="preloader">
			<div id="status"></div>
		</div>
		
		<div class="page-wrapper">

			<!-- Top Bar Start -->
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-6 top-contact">
							<div class="list">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Top Bar End -->

			<!-- Header Start -->
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 logo">
							<h1>
								<a href="{{route('home')}}"><img src="{{ asset('/clientviews/img/jemduk.png')}}" alt="jemduk">
								Jemduk</a>
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


			<!-- properties Search Start -->
			<div class="properties bg-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Find Accomodation</h2>
							<div class="border-shape"></div>	
							<!-- <h3>We Provide Almost All Kinds of Real Estate Services</h3> -->
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12">
							{{Form::open(['route' => 'search_property', 'method' => 'POST'])}}
								{{ csrf_field() }}
								<!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div> -->
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
										<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
											<div class="mt-car-search">
												<input type="hidden" name="scope" id="scope" value="Rent" >
												<!--<select name="scope" id="scope" class="select-car-category form-control">-->
												<!--	<option value="">Select Scope:</option>-->
						      <!--                      <option value="Sale">For Sale</option>-->
						      <!--                      <option value="Lease"> For Lease</option>-->
						      <!--                      <option value="Rent">For Rent</option>-->
						      <!--                  </select>-->
						                    </div>
										<!--</div>-->
										<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
											<div class="mt-car-search">
												<input type="hidden" name="category" id="category" value="location" >
												<!--<select name="category" id="category" class="select-car-category form-control">-->
												<!--	<option value="">Search by:</option>-->
						      <!--                      <option value="type">Property Type</option>-->
						      <!--                      <option value="price">Price</option>-->
						      <!--                      <option value="location">Location</option>-->
						      <!--                  </select>-->
						                    </div>
										<!--</div>				-->
										<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">				
											<div class="mt-car-search">
													<input type="text" id="search-box" name="search_item" value="" class="search-field form-control" placeholder="enter search item ..." autocomplete="off">
													<div id="suggesstion-box">
														
													</div>
											</div>																				
										</div>		
										<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">		
											<div class="mt-car-search">
												<div class="submit">
													<input type="submit" name="search" value="FIND NOW" class="search-field form-control btn btn-primary" />
												</div>									
											</div>														
										</div>
										<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
									</div>
								</div>
															
								<!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>		 -->
							{{Form::close()}}						
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-10 search-property">
						<div class="col-md-12">@include('layouts.errors')</div>
							<!-- <div class="" style="background-color:#D4D4D4;"> -->
	                        @if(isset($results))
	                        	<h2>Search Results</h2>
	                        	<div class="border-shape"></div>

	                        	
	                            @if ($results->isEmpty())
	                            	Opps! No properties found
	                            @else
	                            	<!-- <div class="row">
	                            		<div class="col-md-2">
	                            			
	                            		</div>
	                            		<div class="col-md-2">
	                            			Location
	                            		</div>
	                            		<div class="col-md-2">
	                            			Scope
	                            		</div>
	                            		<div class="col-md-2">
	                            			Price
	                            		</div>
	                            		<div class="col-md-2">
	                            			Type
	                            		</div>
	                            		<div class="col-md-2">
	                            			Description
	                            		</div>
	                            	</div> -->
	                            	<hr/>                       	
	                            	@foreach($results as $property)
	                            		<a href="/show/{{$property->id}}">
	                            			<div class="row">
		                            			<div class="col-md-2">
		                            				<img src="{!! url('photo/'.$property->photo[0]->photo_name) !!}" alt="" style="height:100px;">
		                            			</div>
			                            		<div class="col-md-2">
			                            			Location: {{$property->location}}
			                            		</div>
			                            		<div class="col-md-2">
			                            			For: {{$property->scope}}
			                            		</div>
			                            		<div class="col-md-2">
			                            			Price: N{{$property->price}}
			                            		</div>
			                            		<div class="col-md-2">
			                            			Type: {{$property->type}}
			                            		</div>
			                            		<!-- <div class="col-md-2">
			                            			Description: {{$property->description}}
			                            		</div>	 -->                            		
		                            		</div>
		                            	</a>
		                            	<hr/> 
	                            	@endforeach                	
	                            @endif

	                            <!-- // dd($results); ?> -->
	                        @endif
	                    </div>
	                    <div class="col-md-1"></div>
					</div>
				</div>
			</div>
			<!-- properties Search end -->



			<!-- Room Category Start -->
			<div class="room-category">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">						
							<div class="single-category">	
								<div class="single-room">
									<img src="{{ asset('/clientviews/images/cat1.jpg') }}" alt=""/>
									<div class="room-overlay">
										<div class="roomdetails-overlay">
											<div class="room-details">
												<h2>Jos North </h2>	
												<a href="{{route('view_jos_houses_on_location', 'jos north')}}" class="readmore-button">View All Properties</a>	<!-- view_jos_houses_on_location is the variable while jos north is the constant value -->
											</div>							
										</div>
									</div>
								</div>			
							</div>	

						</div>
						<div class="col-md-6 col-sm-6">
							<div class="single-category">	
								<div class="single-room">
									<img src="{{ asset('/clientviews/images/cat2.jpg') }}" alt=""/>
									<div class="room-overlay">
										<div class="roomdetails-overlay">
											<div class="room-details">
												<h2>Jos South</h2>	
												<a href="{{route('view_jos_houses_on_location', 'jos south')}}" class="readmore-button">View All Properties</a>	<!-- view_jos_houses_on_location is the variable while jos south is the constant value -->
											</div>							
										</div>
									</div>
								</div>			
							</div>
						</div>
					</div>
				</div>		
			</div>			
			<!-- Room Category End -->
			
			<!-- contact us starts-->
			<section class="team" id="contact">
				<div class="container">
					<div class="row">						
						<div class="col-md-12">
							<div class="heading">
								<h2>Get in Touch</h2>
								<div class="border-shape"></div>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-2"></div>
						<div class="col-md-6 col-sm-6 col-xs-10" style="margin-top:50px;">
							<aside>
					        	<div class="get-in-touch">
						        	<div class="contact-item">
						        		<div class="col-md-6">
						        			<p><i class="zmdi zmdi-phone" aria-hidden="true"></i> Phone: (+234) 8032851135 <br/>&nbsp;&nbsp; (+234) 7062193996 <br/>&nbsp;&nbsp; (+234) 8136943343</p><br/>
						        		</div>
						        		<div class="col-md-6">
						        			<p><i class="zmdi zmdi-local-post-office" aria-hidden="true"></i> Email: jemdukonline@gmail.com</p>
            								<p><i class="zmdi zmdi-pin" aria-hidden="true"></i> Address: nHub Nigeria , 3rd Floor Taen Business Complex, Opp. NITEL , Old Airport Road Jos Plateau State.</p>
						        		</div>
            							
            							
        							</div>                        
								</div>
							</aside>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-2"></div>
					</div>
					
				</div>
			</section>

		<!--contact us ends -->

		
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
	<script type="text/JavaScript">
		$(document).ready(function () {
			    Handler for .ready() called.
			    $('html, body').animate({
			        scrollTop: $('#searchp').offset().top
			    }, 'slow');
			    return false;
			});
	</script>
</html>