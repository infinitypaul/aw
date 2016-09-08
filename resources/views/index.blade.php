@extends('layouts.master')
	
@section('content')

 
	<!-- 1 -->
	<div class="section banner" >
		<div class="container pos-relative">
			<div class="caption">
				<div class="title-box">
					<h2>WE ARE THE BEST LAUNDRY SERVICES</h2>
				</div>
				<p>At Anywash we provide the best laundry service at affordable price delivered to your doorstep.</p>
				<a href="#" title="" class="btn btn-default">LEARN MORE</a>
			</div>
		</div>
		<div class="imgbg" style="background:url('images/homeslide.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
			<img src="{{asset('images/homeslide.jpg')}}" alt="">
		</div>
		<div class="work-info">
			<div class="container">
				<div class="work-info-item">
					<div class="work-info-icon">
						<span class="fa fa-phone"></span>
					</div>
					<div class="work-info-body">
						Have a question? call us now
						<div class="work-info-lead">+234 8170012975</div>
					</div>
				</div>
				<div class="work-info-item">
					<div class="work-info-icon">
						<span class="fa fa-clock-o"></span>
					</div>
					<div class="work-info-body">
						We are open Mon-Fri
						<div class="work-info-lead">Mon - Fri 08:00am-09:00pm </div>
					</div>
				</div>
				<div class="work-info-item">
					<div class="work-info-icon">
						<span class="fa fa-envelope"></span>
					</div>
					<div class="work-info-body">
						Need Support? Drop us an email
						<div class="work-info-lead"><a href="mailto:hello@anywash.ng" title="">hello@anywash.ng</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- 2 -->
	<div class="section about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">WHY CHOOSE US?</h2>
						<p class="sublead">We are committed to provide high service for customers. we assure dedicated care for  your laundry with leading service standard.</p>
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
							<h4>EXPERT CLEANER</h4>
							<p> Our company has expert clearner that can clean any types of clothes or materials safely. Our employees are professionally trained with a lot of experience in cleaning any clothes safely, they have good skills and knowledge.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-money"></div>
						</div>
						<div class="ket">
							<h4>AFFORDABLE PRICE</h4>
							<p>We provide the best services for clients at affordable price.  We also offer some additional discounts or deals at certain events. You can contact our sales representatives today to ask about our affordable laundry service.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-truck"></div>
						</div>
						<div class="ket">
							<h4>EXPRESS DELIVERY</h4>
							<p>If you need to clean your clothes quickly, you should consider using our service. We provide the best service for clients. Contact our customer care agents to ask about the estimated time for cleaning your clothes.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-life-bouy"></div>
						</div>
						<div class="ket">
							<h4>EXPERICENCED </h4>
							<p>Our company has a lot of experiences in this industry. We know how to solve any problems that may occur during the laundry cleaning process. You can rely on our experience when hiring our professional laundry service.</p>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>

	
	<!-- 3 -->
	<div class="section services">
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
			
				<div class="col-sm-6 col-md-4">
					<div class="services-item left">
						<div class="icon">
							<img src="{{asset('images/home-service-img-1.jpg')}}" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>BASIC OR REGULAR </h4>
							<p> Is a normal dry-cleaning service which includes washing, ironing, and cleaning. </p>
						</div>
					</div>
					<div class="services-item left">
						<div class="icon">
							<img src="{{asset('images/home-service-img-2.jpg')}}" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>CORPORATE SERVICE</h4>
							<p>Is specifically designed for corporate entities i.e. banks, hotels, restaurant etc.</p>
						</div>
					</div>
					<div class="services-item left">
						<div class="icon">
							<img src="{{asset('images/home-service-img-3.jpg')}}" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>BASIC EXPRESS</h4>
							<p>Rendered urgently within 24hrs or less, depending on customer request.</p>
						</div>
					</div>
					
				</div>
				
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<div class="services-item right">
						<div class="icon">
							<img src="{{asset('images/home-service-img-4.jpg')}}" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>CORPORATE EXPRESS</h4>
							<p>Corporate service rendered urgently specifically for corporate entities. </p>
						</div>
					</div>
					<div class="services-item right">
						<div class="icon">
							<img src="{{asset('images/home-service-img-5.jpg')}}" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>V I P SERVICE</h4>
							<p>Comes with extra ordinary services e.g perfuming, treatment, dyeing, repair etc. </p>
						</div>
					</div>
					<div class="services-item right">
						<div class="icon">
							<img src="{{asset('images/home-service-img-6.jpg')}}" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>V I P EXPRESS</h4>
							<p>This is a V I P service that requires urgency. </p>
						</div>
					</div>
					
				</div>
				
				<div class="col-sm-12 col-md-4 col-md-offset-4">
					<div class="services-item-image">
						<img src="{{asset('images/service_img_home2-u24208-fr.png')}}" alt="" />
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
		
	<!-- 4 --> 
	<div class="section stat-facts" style="background:url('images/page_img-u24411-fr.png') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="bg-overlay">
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="stat-item">
							<div class="icon">
								<i class="fa fa-briefcase"></i>
							</div>
							<div class="stat-title">
								<h3 class="number">450</h3>
								<p>Business Clients</p>
							</div>	
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="stat-item">
							<div class="icon">
								<i class="fa fa-coffee"></i>
							</div>
							<div class="stat-title">
								<h3 class="number">250</h3>
								<p>Request</p>
							</div>	
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="stat-item">
							<div class="icon">
								<i class="fa fa-thumbs-o-up"></i>
							</div>
							<div class="stat-title">
								<h3 class="number">4554</h3>
								<p>People Like Us</p>
							</div>	
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="stat-item">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="stat-title">
								<h3 class="number">350</h3>
								<p>Employees</p>
							</div>	
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- 5 -->
	<div class="section testimonials">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">TESTIMONIALS</h2>
						<p class="sublead">Here is what our clients are saying about working with us at ANYWASH.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 col-md-6">
					<div class="testimonials-item">
						<div class="people">
							<img src="{{asset('images/anony1.jpg')}}" alt="" class="img-circle" />
							<h3>John Deol</h3>
							<p></p>
						</div>
						<div class="quote-box">
							<p>"What are you waiting for? I never thought I'd get passionate enough over laundry to write about it, but these guys are so good i just have to spread the word! The customer service is impeccable."</p>
							<div class="q-url">
								<!--<a href="#" title="">www.google.com</a>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-6">
					<div class="testimonials-item">
						<div class="people">
							<img src="{{asset('images/anony2.jpg')}}" alt="" class="img-circle" />
							<h3>Sonny Deol</h3>
							<p></p>
						</div>
						<div class="quote-box">
							<p>" I can no longer complain about having to set aside time to do laundry or having to leave work early to make it in time to pick up my dry cleaning. Anywash services are amazing! "</p>
							<div class="q-url">
								<!--<a href="#" title="">www.dcentertaiment.com</a>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-6">
					<div class="testimonials-item">
						<div class="people">
							<img src="{{asset('images/anony1.jpg')}}" alt="" class="img-circle" />
							<h3>Jenny Deol</h3>
							<p></p>
						</div>
						<div class="quote-box">
							<p>"
Anywash is awesome. I can drop off and pick up my dry-cleaning 24/7. Their service has been great. I even get text messages and emails to remind me to pick up my dry-cleaning "</p>
							<div class="q-url">
								<!--<a href="#" title="">www.layer.com</a>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-6">
					<div class="testimonials-item">
						<div class="people">
							<img src="{{asset('images/anony1.jpg')}}" alt="" class="img-circle" />
							<h3>Rambo Deol</h3>
							<p></p>
						</div>
						<div class="quote-box">
							<p>"Great experience. As a busy person who travels all the time Anywash is the perfect solution. I was able to deposit my laundry at my convenience and pick it up at my convenience. "</p>
							<div class="q-url">
								<!--<a href="#" title="">www.dota.com</a>-->
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	<!-- 6 --> 
	<div class="section stat-client p-main" style="">
		<div class="container">
			<div class="row">
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="{{asset('images/client1.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="{{asset('images/client2.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
                    <img src="{{asset('images/client3.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
                    <img src="{{asset('images/client1.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
                    <img src="{{asset('images/client2.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
                    <img src="{{asset('images/client3.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	
	 
	<!-- 7 -->
	<div class="section blog pbot-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-md-offset-3">
					<div class="page-title">
						<h2 class="lead">ANYWASH CLUB MEMBERSHIP</h2>
						<!--<p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>-->
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="icon-news">
								<div class="fa fa-image"></div>
							</div>
							<img src="{{asset('images/blog-img-1.jpg')}}" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="{{ action('HomeController@getAbout') }}" title="">BRONZE MEMBERSHIP</a>
								</p>
								<p>An individual or organization is qualified to be a bronze member of anywash.ng if such a person washes up to 20-30 clothes in a month from anywash.ng. A bronze member of anywash.ng is entitled to 5% discount on clothes he/she may bring.</p>
							</div>
							<div class="body-footer">
								<!--<div class="author">
									<i class="fa fa-user"></i> BY JOHN DOEL
								</div>-->
								<!--<div class="date">
									<i class="fa fa-calendar"></i> MAY 29, 2015
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="icon-news">
								<div class="fa fa-image"></div>
							</div>
                            <img src="{{asset('images/blog-img-2.jpg')}}" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="{{ action('HomeController@getAbout') }}" title="">SILVER MEMBERSHIP</a>
								</p>
								<p>An individual or organization can be a silver member of anywash.ng when he/she washes up to 31-50 clothes with us in a month. Such a member enjoys to 10% discount on every clothes brought for washing.</p>
							</div>
							<div class="body-footer">
								<!--<div class="author">
									<i class="fa fa-user"></i> BY JOHN DOEL
								</div>-->
								<!--<div class="date">
									<i class="fa fa-calendar"></i> MAY 29, 2015
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="icon-news">
								<div class="fa fa-image"></div>
							</div>
                            <img src="{{asset('images/blog-img-1c.jpg')}}" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="{{ action('HomeController@getAbout') }}" title="">GOLD MEMBERSHIP</a>
								</p>
								<p>A gold member is one who must have washed 51-70 clothes with anywash.ng within a month. This member is entitled to 15% discount on every clothes brought for washing.</p>
							</div>
							<div class="body-footer">
								<!--<div class="author">
									<i class="fa fa-user"></i> BY JOHN DOEL
								</div>-->
								<!--<div class="date">
									<i class="fa fa-calendar"></i> MAY 29, 2016
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	@stop