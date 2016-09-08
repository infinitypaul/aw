@extends('layouts.master')

@section('content')
 
	<!-- 1 -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>About Us</h3>
						<ol class="breadcrumb">
						  <li><a href="{{ action('HomeController@getIndex') }}">Home</a></li>
						  <li class="active">About Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<!-- 2 -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">WELCOME TO ANYWASH</h2>
						<p class="sublead">We offers best, cheapest, door to door, and pick up delivery services
</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-xs-12 col-md-6">
					<div class="about-img">
						<img src="images/about_history-u24541-fr.jpg" alt="" class="img-responsive" />
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="about-wrap">
						<h4 class="title-page">INTRODUCTION </h4>
						<p>Anywash.ng is an online base laundry & dry cleaning services, that will offer customers/clients the opportunity of placing orders for their laundry and dry cleaning services. </p>
						<p>This concept is born out of convenience and ever-busy schedules of most Lagosians and at the same time to bridge the gap of cleanliness.</p>
						<p>The urban nature, couple with the mega-city status of Lagos which has estimated population of about 20million people, makes it a viable market for laundry services for most corporate and working class with the metropolitan Lagos.</p>
                        <p>Anywash.ng services will be online base with pick up and delivery services as applicable through the use of www.anywash.ng website or downloadable mobile app.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				
				<div class="why-item-wrap">
					<div class="col-xs-12 col-md-4">
						<div class="why-item">
							<div class="icon">
								<div class="fa fa-paper-plane-o"></div>
							</div>
							<div class="ket">
								<h4>OUR VISION</h4>
								<p>To be the leading laundry and dry cleaning service nationwide with focus on high quality and consistent pursuit of excellence in all that we do.
</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="why-item">
							<div class="icon">
								<div class="fa fa-crosshairs"></div>
							</div>
							<div class="ket">
								<h4>OUR MISSION</h4>
								<p>To be a leading online driven laundry and dry cleaning services in Nigeria and beyond, that is seamless and fun to use.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="why-item">
							<div class="icon">
								<div class="fa fa-leaf"></div>
							</div>
							<div class="ket">
								<h4>OUR CORE VALUE</h4>
								<p>
Delivering the best quality to our customers, ensuring they are satisfied with our services and providing our them with the best customer care.</p>
							</div>
						</div>
					</div>
				
				</div>
			</div>
			
		</div>
	</div>
	
	
	
	<!-- STATS SECTION FACTS --> 
	<!-- ABOUT SECTION -->
	<div class="section about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">ANYWASH CLUB MEMBERSHIP</h2>
						<p class="sublead">Join our membership club and get discount.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-flash"></div>
						</div>
						<div class="ket">
							<h4>BRONZE</h4>
							<p>An individual or organization is qualified to be a bronze member of anywash if such person washes up to 20-30 clothes in a month from anywash. A bronze member of anywash is entitled to 5% discount on clothes.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-money"></div>
						</div>
						<div class="ket">
							<h4>SILVER </h4>
							<p>An individual or organization can be a silver member of anywash.ng when he/she washes up to 31-50 clothes with us in a month. Such a member enjoys to 10% discount on every clothes brought for washing.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-crosshairs"></div>
						</div>
						<div class="ket">
							<h4>GOLD </h4>
							<p>A gold member is one who must have washed 51-70 clothes with anywash.ng within a month. This member is entitled to 15% discount on every clothes brought for washing.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-life-bouy"></div>
						</div>
						<div class="ket">
							<h4>PLATINUM </h4>
							<p>Platinum members for anywash.ng are clients that wash up to 71 clothes and above with us in a month and can schedule and pay upfront. Platinum members enjoy 25% discount on every clothes washed.</p>
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
						<p class="ftex"> Note: All anywash.ng members must make their payments using our online platform payment gateway provided on our site, in other to enjoy our discounts.</p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<!-- 10 --> 
	<!--<div class="section stat-client bg-grey pbot-main" style="">
		<div class="container">
		
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">CLIENTS WORK WITH US</h2>
						<p class="sublead">Trust and integrity are what come to mind in our relationship with Clients.</p>
					</div>
				</div>
			</div>
		
			<div class="row">
				
				<div class="col-xs-12 col-md-2">
					<div class="client-img">
						<img src="images/client12.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-12 col-md-2">
					<div class="client-img">
						<img src="images/client22.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-12 col-md-2">
					<div class="client-img">
						<img src="images/client32.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-12 col-md-2">
					<div class="client-img">
						<img src="images/client12.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-12 col-md-2">
					<div class="client-img">
						<img src="images/client22.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-12 col-md-2">
					<div class="client-img">
						<img src="images/client32.png" alt="" class="img-responsive" />
					</div>
				</div>
				
			</div>
		</div>
	</div>-->
		
	@stop