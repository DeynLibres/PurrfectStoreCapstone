@extends('layouts.footer')
@extends('layouts.app')

@section('content')
<div class="container-fluid">
<ul class="nav nav-tabs" role="tablist">
	<li class="nav-item">
		<a class="nav-link {{request()->is('about') ? 'active' :null }}"  href="{{url('about')}}" role="tab">About</a>
	</li>
	<li class="nav-item">
		<a class="nav-link {{request()->is('contact') ? 'active'  :null}}"  href="{{url('contact')}}" role="tab">Contacts</a>
	</li>
	<li class="nav-item">
		<a class="nav-link {{request()->is('team') ? 'active' :null }}"  href="{{url('team')}}" role="tab">Team</a>
	</li>
</ul><!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane  {{request()->is('about') ? 'active' :null }}" id="{{url('about')}}" role="tabpanel">
				<div class="container-xl img-container">
					<img class="" src="{{asset('img/aboutbanner.jpg')}}" style="" alt="">
				</div>
				<div class="container-xl">
					<div class="tab-pane-header">
						<div class="tab-pane-header-img-container">
							<img src="{{asset('img/Logosure-1.png')}}" alt="">
						</div>
						<div class="tab-pane-header-desc">
						<h1>Our Mission</h1>
						<p>To be the most trusted and convenient destination for pet parents (and partners), everywhere.</p>
						</div>
					</div>
				</div>
				
				<div class="container-xl culture">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6 col-sm-12"><div class="contain">
							<img src="{{asset('tabs-img/tabsaboutimg.jpg')}}" alt=""></div></div>
						<div class="col-lg-6 col-md-6 col-sm-12 our-culture" >
							
								<h2>Our Culture</h2>
								<span>We work hard, and we win</span>
								<hr>
								<p>At Purrfect, we strive to deliver the best products with the best service – and we want to become even better. Happy customers are always our #1 priority, and our team members are passionate about finding new ways to wow both pet owners and the industry at large.</p>
						
						</div>
					</div>
				</div>
				<div class="container-xl culture2">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6 col-sm-12"><div class="contain">
							<img src="{{asset('tabs-img/about.jpg')}}" alt=""></div></div>
						<div class="col-lg-6 col-md-6 col-sm-12 our-culture" >
							
								<h2>Customers First</h2>
								<span>We're always here for our customers.</span>
								<hr>
								<p>Our experts are here 24/7 to answer questions and help you find the perfect items for your pet. We also have a 100% Unconditional Satisfaction Guaranteed Policy on every order, just in case they’re not crazy about that new food or toy. Shopping for your pet has never been easier.

.								</p>
						
						</div>
					</div>
				</div>
				<div class="container-fluid service-row">
					<div class="row">
						<div class="col col-lg-4 col-md-4 col-sm-12 text-center">
							<h2>24/7</h2>
							<span>Customer Service</span>
							<div>
							<p>When it comes to customer service, we're breaking records and raising the bar with around-the-clock access to our pet experts.</p>
							</div>
						</div>
						<div class="col col-lg-4 col-md-4  col-sm-12 text-center">
							<h2>Over 20k</h2>
							<span>Team Members</span>
							<div>
							<p>We're always on the hunt for new talent to bring our dreams of the best pet shopping experience to life.</p>
							</div>
						</div> 
						<div class="col col-lg-4 col-md-4  col-sm-12 text-center">
							<h2>Customer Experience</h2>
							<span>Customer Service</span>
							<div>
							<p>Purrfect is always dedicated to providing an exceptional customer experience.</p>
							</div>	
						</div>
					</div>

				</div>
	</div>		



			


	
	
	<div class="tab-pane {{request()->is('contact') ? 'active' :null }}" id="{{url('contact')}}" role="tabpanel">
		<div class="container-xl img-container">
			<img class="" src="{{asset('tabs-img/contact-us-hero.jpg')}}" style="" alt="">
		</div>
		<div class="container-xl">
			<div class="help">
					<div class="row">
					
						<div class="col">

						</div>
					
						<div class="col">
							<div class="row">
							<div class="col"></div>
							<div class="col"></div>
							<div class="col"></div>
							</div>
				<		/div>
				</div>
			</div>
			</div>
		</div>

	</div>
	<div class="tab-pane {{request()->is('team') ? 'active' :null }}" id="{{url('team')}}" role="tabpanel">
		<p>Third Panel</p>
	</div>
</div>
</div>
@endsection