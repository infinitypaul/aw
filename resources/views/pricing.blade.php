@extends('layouts.master')
	
@section('content')
 
	<!-- BANNER -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>PRICING</h3>
						<ol class="breadcrumb">
						  <li><a href="{{ action('HomeController@getIndex') }}">Home</a></li>
						  <li class="active">Pricing</li>
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
						<h2 class="lead">OUR PRICING TABLE</h2>
						<p class="sublead">Find out about our billing options below.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-sm-12 col-md-3">
					<div class="panel panel-default panel-pricing wow fadeInDown">
						<header class="panel-heading">
							<h3>Basic or Regular </h3>
							<div class="price">
								<!--<sup>$</sup>10-->
							</div>
						</header>
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr><td>Washing</td></tr>
									<tr><td>Cleaning</td></tr>
									<tr><td>Ironing</td></tr>
									<tr><td>No Perfume</td></tr>
									<tr><td>1 Day Finish</td></tr>
								</tbody>
							</table>
						</div>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary btn-block">ORDER NOW</a>
						</footer>
					</div>
		
				</div>
				
				<div class="col-sm-12 col-md-3">
					<div class="panel panel-default panel-pricing wow fadeInDown">
						<header class="panel-heading">
							<h3>Corporate</h3>
							<div class="price">
								<!--<sup>$</sup>25-->
							</div>
						</header>
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr><td>Washing</td></tr>
									<tr><td>Cleaning</td></tr>
									<tr><td>Ironing</td></tr>
									<tr><td> No Perfume</td></tr>
									<tr><td>1 Day Finish</td></tr>
								</tbody>
							</table>
						</div>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary btn-block">ORDER NOW</a>
						</footer>
					</div>
		
				</div>
				
				<div class="col-sm-12 col-md-3">
					<div class="panel panel-default panel-pricing wow fadeInDown">
						<header class="panel-heading">
							<h3>Basic Express</h3>
							<div class="price">
								<!--<sup>$</sup>45-->
							</div>
						</header>
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr><td>Washing</td></tr>
									<tr><td>Cleaning</td></tr>
									<tr><td>Ironing</td></tr>
									<tr><td>No Perfume</td></tr>
									<tr><td>Less than 1 Day</td></tr>
								</tbody>
							</table>
						</div>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary btn-block">ORDER NOW</a>
						</footer>
					</div>
		
				</div>
				
				<div class="col-sm-12 col-md-3">
					<div class="panel panel-default panel-pricing wow fadeInDown">
						<header class="panel-heading">
							<h3>V I P </h3>
							<div class="price">
								<!--<sup>$</sup>99-->
							</div>
						</header>
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr><td>Basic</td></tr>
									<tr><td>Treatment</td></tr>
									<tr><td>Dyeing</td></tr>
									<tr><td>Perfume</td></tr>
									<tr><td>1 Day Finish</td></tr>
								</tbody>
							</table>
						</div>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary btn-block">ORDER NOW</a>
						</footer>
					</div>
		
				</div>
				
				
				
			</div>
			
			<!--  -->
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">MORE DETAIL PRICE</h2>
						<p class="sublead"> Separate charges for any services which are ordered.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-sm-12 col-md-6">
					<div class="price-detail">
						<div class="price-detail-heading">Full service (washing, ironing and packaging).</div>
						<div class="price-detail-body">
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Shirts</div>
								<div class="item-price">₦ 150</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Native </div>
								<div class="item-price">₦ 300</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Trouser</div>
								<div class="item-price">₦ 150</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Complete suit</div>
								<div class="item-price">₦ 900</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Bedspread</div>
								<div class="item-price">₦ 500</div>
							</div>
							
						</div>
					</div>
		
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="price-detail">
						<div class="price-detail-heading">Full service</div>
						<div class="price-detail-body">
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Duvet</div>
								<div class="item-price">₦ 900</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>T-shirt</div>
								<div class="item-price">₦ 100</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Jacket, Towel</div>
								<div class="item-price">₦ 450</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Gown</div>
								<div class="item-price">₦ 200</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Skirt & blouse</div>
								<div class="item-price">₦ 200</div>
							</div>
							
						</div>
					</div>
		
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="price-detail">
						<div class="price-detail-heading">Ironing & Packaging only.</div>
						<div class="price-detail-body">
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Shirt</div>
								<div class="item-price">₦ 100</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Native </div>
								<div class="item-price">₦ 150</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Trouser</div>
								<div class="item-price">₦ 100</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Complete suit</div>
								<div class="item-price">₦ 400</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Bedspread</div>
								<div class="item-price">₦ 200</div>
							</div>
							
						</div>
					</div>
		
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="price-detail">
						<div class="price-detail-heading">Ironing & Packaging only.</div>
						<div class="price-detail-body">
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Duvet</div>
								<div class="item-price">₦ 400</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>T-shirt</div>
								<div class="item-price">₦ 50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Jacket, Towel</div>
								<div class="item-price">₦ 200</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Gown</div>
								<div class="item-price">₦ 100</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Skirt & blouse</div>
								<div class="item-price">₦ 100</div>
							</div>
							
						</div>
					</div>
		
				</div>
				
				<div class="col-sm-12 col-md-12">
				
				<p class="more-info-price">Get discount 10% if you join our membership. <br />
				<!--Leather items (1 - 2 weeks finish). <br />-->
				Don't worry if your items not listed here, <a href="mailto:hello@anywash.ng" title="">Send Us Message</a> and we will take care of it.</p>
				</div>
			</div>
			
			
			
		</div>
	</div>
	
	
	<!-- FOOTER SECTION -->
	@stop