@extends('layouts.master')

@section('content')
 
	<!-- 1 -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>SERVICES</h3>
						<ol class="breadcrumb">
						  <li><a href="{{ action('HomeController@getIndex') }}">Home</a></li>
						  <li class="active">Services</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<!-- 2 -->
	<div id="services" class="section services">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">OUR SERVICES</h2>
						<p class="sublead">Anywash is a professional Laundry Service that provides customers with the most convenient laundry services.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="services-item-full">
					<div class="col-xs-12 col-md-6">
						<div class="about-img">
							<img src="images/services-img-1.jpg" alt="" class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="desc-wrap">
							<h4 class="title-page">BASIC OR REGULAR SERVICE</h4>
							<p>At ANYWASH we provide the most convenient way to do laundry and dry cleaning. we take the utmost care in cleaning your laundry and provides the highest quality on-demand pickup and delivery service for laundry and dry cleaning.<br />
                            We offer a basic service which is a normal dry-cleaning service <br />which includes</p>
							<ul class="service-list">
								<li><i class="fa fa-check-circle"></i> washing.</li>
								<li><i class="fa fa-check-circle"></i> ironing.</li>
								<li><i class="fa fa-check-circle"></i> cleaning.</li>
								<li><i class="fa fa-check-circle"></i> Pickup and delivery service.</li>
								<li><i class="fa fa-check-circle"></i> @ Affordable Price.</li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="services-item-full">
					<div class="col-xs-12 col-md-6">
						<div class="desc-wrap">
							<h4 class="title-page">CORPORATE SERVICE</h4>
							<p>At ANYWASH we provide the provide the best services for clients at affordable price, you can rely on our experience when hiring our professional laundry service.
We offer Corporate service which is also a basic service but this service is specifically designed for corporate entities i.e. banks, hotels, restaurant and so on. It also includes</p>
							<ul class="service-list">
								<li><i class="fa fa-check-circle"></i> washing.</li>
								<li><i class="fa fa-check-circle"></i> ironing.</li>
								<li><i class="fa fa-check-circle"></i> cleaning.</li>
								<li><i class="fa fa-check-circle"></i> Pickup and delivery service.</li>
								<li><i class="fa fa-check-circle"></i> @Affordable Price.</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="about-img">
							<img src="images/services-img-2.jpg" alt="" class="img-responsive" />
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="services-item-full">
					<div class="col-xs-12 col-md-6">
						<div class="about-img">
							<img src="images/services-img-3.jpg" alt="" class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="desc-wrap">
							<h4 class="title-page">BASIC EXPRESS</h4>
							<p>We provide the highest quality dry cleaning at your doorstep. we do it all, better and faster than anyone. Although we offer affordable service, we still want to provide high service quality for customers. <br />At ANYWASH, we also offer a Basic service which is rendered urgently within the period of 24hrs or less, depending on the request of the customer or client.</p>
							<ul class="service-list">
								<li><i class="fa fa-check-circle"></i> washing.</li>
								<li><i class="fa fa-check-circle"></i> ironing.</li>
								<li><i class="fa fa-check-circle"></i> cleaning.</li>
								<li><i class="fa fa-check-circle"></i> Pickup and delivery service.</li>
								<li><i class="fa fa-check-circle"></i> Express Delivery.</li>
                                <li><i class="fa fa-check-circle"></i> @ Affordable Price.</li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="services-item-full">
					<div class="col-xs-12 col-md-6">
						<div class="desc-wrap">
							<h4 class="title-page">CORPORATE EXPRESS</h4>
							<p>If you need to clean your clothes quickly, you should consider using our service. We provide the best service for clients at required time within the period of 24hrs or less, depending on customer request.<br /> This is a corporate service which is rendered urgently specifically for corporate entities. </p>
							<ul class="service-list">
								<li><i class="fa fa-check-circle"></i> washing.</li>
								<li><i class="fa fa-check-circle"></i> ironing.</li>
								<li><i class="fa fa-check-circle"></i> cleaning.</li>
                                <li><i class="fa fa-check-circle"></i> Express Delivery.</li>
								<li><i class="fa fa-check-circle"></i> Pickup and delivery service.</li>
								<li><i class="fa fa-check-circle"></i> @ Affordable Price.</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="about-img">
							<img src="images/services-img-4.jpg" alt="" class="img-responsive" />
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="services-item-full">
					<div class="col-xs-12 col-md-6">
						<div class="about-img">
							<img src="images/services-img-5.jpg" alt="" class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="desc-wrap">
							<h4 class="title-page">V I P SERVICE</h4>
							<p>ANYWASH is one of the best companies for dry cleaning.The quality, convenience and excellent service is what makes us awesome. We ensures soft clean laundry that smells fresh and also deploy an inspection process that makes sure you get your clothes back with no broken buttons and more attention to detail than ever before.<br /> It comes with extra ordinary services e.g</p>
							<ul class="service-list">
								<li><i class="fa fa-check-circle"></i> perfuming.</li>
								<li><i class="fa fa-check-circle"></i> treatment.</li>
								<li><i class="fa fa-check-circle"></i> dyeing.</li>
								<li><i class="fa fa-check-circle"></i> repair.</li>
								<li><i class="fa fa-check-circle"></i> @ Affordable Price.</li>
							</ul>
						</div>
					</div>
					
					<div class="clearfix"></div>
				</div>
				
				<div class="services-item-full">
					<div class="col-xs-12 col-md-6">
						<div class="desc-wrap">
							<h4 class="title-page">V I P EXPRESS</h4>
							<p>We provide a reliable and fast laundry services and dry cleaning that works for the professional as well as busy moms on the go. Just take all your clothes that need laundry  to us and we'll clean them with the best detergents and fabric softeners. <br />V I P express is also a VIP service but it is a service requires some level of urgency.<br />Note: express services cost extra payment.
                            </p>
							<ul class="service-list">
								<li><i class="fa fa-check-circle"></i> perfuming.</li>
								<li><i class="fa fa-check-circle"></i> treatment.</li>
								<li><i class="fa fa-check-circle"></i> dyeing.</li>
								<li><i class="fa fa-check-circle"></i> repair.</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="about-img">
							<img src="images/services-img-6.jpg" alt="" class="img-responsive" />
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				
				
				
			</div>
			
		</div>
	</div>
	
	
	@stop