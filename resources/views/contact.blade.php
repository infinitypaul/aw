@extends('layouts.master')

@section('content')
 
	<!-- BANNER -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>CONTACT</h3>
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">Contact</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<!-- ABOUT SECTION -->
	<div id="services" class="section services">
		<div class="container">
			<!--  -->
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">CONTACT US</h2>
						<p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
					</div>
				</div>
			</div>
			
			
			<div class="row pbot-main">
			
				<div class="col-sm-12 col-md-6">
					
					<form action="#" class="form-contact shake" id="contactForm"  data-toggle="validator">
						<div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Enter Name *" required>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="Enter Email *" required>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="phone" placeholder="Enter Phone Number">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="address" placeholder="Enter Address">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="city" placeholder="Enter City">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="zip" placeholder="Enter Zip">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							 <textarea id="message" class="form-control" rows="5" placeholder="Enter Your Message *" required></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<div id="success"></div>
							<button type="submit" class="btn btn-default">SEND A MESSAGE</button>
						</div>
					</form>
					
					
				</div>
				
				<div class="col-sm-12 col-md-6">
				
					<div class="maps-wraper">
						<div id="cd-zoom-in"></div>
						<div id="cd-zoom-out"></div>
						<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" >
							
						</div>
					</div>
					
					 
					<div class="row contact-address">
						<div class="col-sm-12 col-md-6">
							<div class="contact-address-item">
								<div class="contact-address-heading">ADDRESS 1</div>
								<p>
								180 Sukarajin Street, Pekanbaru <br />
								40021 Riau. <br />
								Indonesia.<br /><br />
								Phone : +62 7144 3311
								</p>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="contact-address-item">
								<div class="contact-address-heading">ADDRESS 2</div>
								<p>
								45 Embunpagi Street, Pekanbaru<br />
								40021 Riau. <br />
								Indonesia.<br /><br />
								Phone : +62 7144 3300
								</p>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="contact-address-item">
								<div class="contact-address-heading">OPENING HOURS</div>
								<p>
								Monday - Friday : 09:00 - 20:00 pm<br />
								Saturday : 09:00 - 17:00
								</p>
							</div>
						</div>
						
					</div>
					
					
				</div>
				
				
			</div>
			
			
			
		</div>
	</div>
	
	
	@stop