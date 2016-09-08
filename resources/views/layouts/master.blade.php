<!DOCTYPE html>
<html class="no-js" lang="en">
  
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anywash - Laundry Service</title>
    <meta name="description" content=" Laundry Business. "
    <meta name="keywords" content="laundry, business, clean">
    <meta name="author" content="rudhisasmito.com"> 
	
	<!-- ==============================================
	11
	=============================================== -->

<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
<link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
	
	<!-- ==============================================
	12
	=============================================== -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	
	
	
	
	<!-- ==============================================
	13
	=============================================== -->
    <link href="{{asset('http://fonts.googleapis.com/css?family=Raleway:400,700,900')}}" rel="stylesheet">
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>-->
	
	
	<!-- 14 -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	
	<script src="{{asset('js/modernizr.min.js')}}"></script>
		
</head>

<body>
	<!-- 15 -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	
	 NAVBAR SECTION 
	<div class="navbar navbar-main navbar-fixed-top">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
						<div class="info">
							<div class="info-item">
								<span class="fa fa-phone"></span> Phone +234 08170012975
							</div>
							<div class="info-item">
								<span class="fa fa-envelope-o"></span> <a href="mailto:hello@anywash.ng" title="">Email hello@anywash.ng</a>
							</div>
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
						<div class="top-sosmed pull-right">
							<a href="#" title=""><span class="fa fa-facebook"></span></a>
							<a href="#" title=""><span class="fa fa-twitter"></span></a>
							<a href="#" title=""><span class="fa fa-instagram"></span></a>
							<a href="#" title=""><span class="fa fa-pinterest"></span></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ action('HomeController@getIndex') }}"><img src="{{asset('images/logo_blue.png')}}" alt="" /></a>
				
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
                    <a href="{{ action('HomeController@getIndex') }}">Home</a>
					 <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="index-2.html">Homepage Default</a></li>
						<li><a href="index2.html">Homepage Sliders</a></li>
					  </ul>-->
					</li>
					<li><a href="{{ action('HomeController@getAbout') }}">ABOUT</a></li>
					<li><a href="{{ action('HomeController@getServices') }}">SERVICES</a></li>
					<li><a href="{{ action('HomeController@getPricing') }}">PRICING</a></li>
					<li><a href="{{ action('HomeController@getFaq') }}">FAQ</a></li>
					<li><a href="{{ action('HomeController@getBlog') }}">BLOG</a></li>
					<li><a href="{{ action('HomeController@getContact') }}">CONTACT</a></li>
				</ul>
			</div>
		</div>
    </div>
    @yield('content')
    
    @yield('footer')
    <!-- 16 -->
	<div class="footer">
	
		<div class="f-desc">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-logo">
								<img src="{{asset('images/logo_blue.png')}}" alt="" />
							</div>
							<p>Anywash.ng is an online base laundry & dry cleaning services, that will offer customers/clients the opportunity of placing orders for their laundry and dry cleaning services.</p>
							<div class="footer-sosmed">
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-facebook"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-twitter"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-pinterest"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-google"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-instagram"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-linkedin"></i>
									</div>
								</a> 
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>RECENT POST</h4>
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="{{ action('HomeController@getBlogs') }}" title="">How to laundry your suit office - tips and trick.</a>
								</div>
								<div class="footer-blog-date">
									May 29, 2016
								</div>
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="{{ action('HomeController@getBlogs') }}" title="">How to laundry your suit office - tips and trick.</a>
								</div>
								<div class="footer-blog-date">
									May 29, 2016
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>NEWSLETTER</h4>
							</div>
							<div class="footer-form">
								<form action="#">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-default">SEND</button>
									</div>
									
								</form>
							</div>
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>GET IN TOUCH</h4>
							</div>
							<div class="footer-getintouch">
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-phone"></b>
									</div>
									<div class="desc">
										<div class="desc-1">Phone</div>
										<div class="desc-2">:</div>
										<div class="desc-3">+234 8170012975<!-- <br />+62 7000 4422--></div>
									</div>
								</div>
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-envelope "></b>
									</div>
									<div class="desc">
										<div class="desc-1">Email</div>
										<div class="desc-2">:</div>
										<div class="desc-3"><a href="mailto:hello@anywash.ng" title="">hello@anywash.ng</a></div>
									</div>
								</div>
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-globe"></b>
									</div>
									<div class="desc">
										<div class="desc-1">Website </div>
										<div class="desc-2">:</div>
										<div class="desc-3">www.anywash.ng</div>
									</div>
								</div>
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-map-marker"></b>
									</div>
									<div class="desc">
										<div class="desc-1">Address </div>
										<div class="desc-2">:</div>
										<div class="desc-3">7 Borokini Dada Street,  
                                        </div>
									</div>
                                    <div class="">Benson Bus-stop Lagos road, opposite UBA Bank, beside Access Bank, Ikorodu. Lagos</div>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
				
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="ftex">&copy; 2016 Anywash by Greenhood Nig Ltd - All Rights Reserved</p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5')}}"></script>
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-hover-dropdown.min.js')}}"></script>
    
    <script src="{{asset('js/script.js')}}"></script>
	
	
	
</body>
</html>