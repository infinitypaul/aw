@extends('layouts.master')
	
@section('content')

	<!-- 1 -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>FAQ</h3>
						<ol class="breadcrumb">
						  <li><a href="{{ action('HomeController@getIndex') }}">Home</a></li>
						  <li class="active">Frequently Asked Question</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<!-- 2 -->
	<div id="services" class="section services">
		<div class="container">
			<!--  -->
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">HOW IT WORKS</h2>
						<!--<p class="sublead"></p>-->
					</div>
				</div>
			</div>
			
			
			<div class="row">
			
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="faq-item">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="ket">
							<h4>CALL US</h4>
							<p>: For more information, you can call us on 08170012975 or send us a message on our email at hello anywash.ng. You can also like us on facebook, follow us on twitter, instagram or crowd-fire.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="faq-item">
						<div class="icon">
							<div class="fa fa-th-list"></div>
						</div>
						<div class="ket">
							<h4>CHOOSE YOUR PACKAGE</h4>
							<p>Choose a asic or regular service, Corporate service, Basic express, Corporate express, V I P service or V I P express service and select the day and time that we can pick up and deliver your laundry.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="faq-item">
						<div class="icon">
							<div class="fa fa-truck"></div>
						</div>
						<div class="ket">
							<h4>PICK-UP & DELIVERY</h4>
							<p>Our pickup laundry service is an easy and affordable.With your click or call, we’ll pickup your laundry and dry cleaning right from your door step (or the spot you choose) and deliver it fresh and clean the next day.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="faq-item">
						<div class="icon">
							<div class="fa fa-money"></div>
						</div>
						<div class="ket">
							<h4>BILLING & PAYMENTS</h4>
							<p>ANYWASH offers customers a variety of options. ANYWASH accept a credit card option. With a credit card customer can easily pay for their services. Find out the billing and payment options on our pricing page
</p>
						</div>
					</div>
				</div>
				
			</div>
			
			
			<!--  -->
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">F.A.Q</h2>
						<p class="sublead">Do you have questions about ANYWASH care, our dry cleaning process, or pick up and delivery service?</p>
					</div>
				</div>
			</div>
			
			
			<div class="row">
			
				<div class="col-sm-12 col-md-4">
					<div class="faq-item-image">
						<img src="images/service_img_home.png" alt="" />
					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="panel-group panel-faq" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading active" role="tab" id="heading1">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
							  How can I order for the service online?
							</a>
						  </h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
						  <div class="panel-body">
							<p>Log on to our website www.anywash.ng and place your order including your location and phone number.</p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading2">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
							  When do I get my clothes back, after pick up?
							</a>
						  </h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
						  <div class="panel-body">
							<p>After 24 hours.</p>
							<!--<ul class="faq-list">
								<li><i class="fa fa-check-square"></i>Ready for all devices.</li>
								<li><i class="fa fa-check-square"></i>Made with Adobe Muse.</li>
								<li><i class="fa fa-check-square"></i>Easy Costumizable.</li>
								<li><i class="fa fa-check-square"></i>No Coding Required.</li>
								<li><i class="fa fa-check-square"></i>Afforadable Price.</li>
							</ul>-->
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading3">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
							  If I want to work for the company, how do I sign in?
							</a>
						  </h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
						  <div class="panel-body">
							<p>Submit your CV to our email address that is hello anywash.ng.</p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading4">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
							Do you wash baby clothes as well?
							</a>
						  </h4>
						</div>
						<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
						  <div class="panel-body">
							<p> It’s an anywash business; we wash all kinds of clothes.</p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading5">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
							  	Do you accept credit cards?
							</a>
						  </h4>
						</div>
						<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
						  <div class="panel-body">
							<p>Yes we do.</p>
						  </div>
						</div>
					  </div>
					
					</div>

				</div>
				
			</div>
			
			
		</div>
	</div>
	
	@stop