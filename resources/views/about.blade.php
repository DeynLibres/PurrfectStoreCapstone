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
				<div class="container-xl  p-0 mission">
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
					<div class="row justify-content-between">
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
					<div class="row justify-content-between">
						<div class="col-lg-6 col-md-6 col-sm-12"><div class="contain">
							<img src="{{asset('tabs-img/about.jpg')}}" alt=""></div></div>
						<div class="col-lg-6 col-md-6 col-sm-12 our-culture" >
							
								<h2>Customers First</h2>
								<span>We're always here for our customers.</span>
								<hr>
								<p>
									Our experts are here 24/7 to answer questions and help you find the perfect items for your pet. We also have a 100% Unconditional Satisfaction Guaranteed Policy on every order, just in case they’re not crazy about that new food or toy. Shopping for your pet has never been easier.</p>
						
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
						<div class="col col-lg-4 col-md-4 col-sm-12  text-center">
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
		<div class="container-xl contacts">
			<div class="help">
				<div class="row">
					<div class="col-md-3 col-sm-12 contact-icons h">	<h1>How can we help
					</h1></div>
					<div class="col-md-3 col-sm-6 contact-icons"><i class="fa-solid fa-phone"></i>
						<div>
						<p>Call Toll-Free Call Toll-Free</p><p>1-234-567-8899</p></div>
					</div>
					<div class="col-md-3 col-sm-4  contact-icons sm"><i class="fa-solid fa-comments"></i>
						<div>
						<p>Chat Now</p><p> Ask an Expert</p></div></div>
						
					<div class="col-md-3 col-sm-6 contact-icons"><i class="fa-solid fa-envelope"></i><p>Message Us</p></div>
				
				</div>
			
			</div>
			</div>
			<div class="container-lg">
				<div class="quest-header">

				</div>
			</div>

			<div class="container-xl accor">
				<div class="container-xl">
					<h1>Prescription Items</h1>
					<div class="accordion" id="accordionPanelsStayOpenExample">
						<div class="accordion-item">
						  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
								Who do I contact if my pet has a negative reaction to the medication?
							</button>
						  </h2>
						  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
							<div class="accordion-body">
								Please immediately contact your vet if your pet has a negative reaction to the medication.
							</div>
						  </div>
						</div>
						<div class="accordion-item">
						  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
								Why is my pet's medication coated with flavoring?
							</button>
						  </h2>
						  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
							<div class="accordion-body">
								Some medications are coated with flavoring to taste better to your pet. This can make it easier to give your pet the medication. Pets may find the flavoring irresistible, so make sure to store the medication in a safe place that’s out of your pet's reach.
							</div>
						  </div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="panelsStayOpen-headingThree">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
								Do I have to have an account to order prescription items?
							  </button>
							</h2>
							<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
							  <div class="accordion-body">
								Yes, you need to have an account on Chewy to place any orders.
							  </div>
							</div>
						  </div>
				
					  </div>
				</div>
			</div>
	
			<div class="container-xl accor">
				<div class="container-xl">
					<h1>Support</h1>
					<div class="accordion" id="accordionPanelsStayOpenExample2">
						<div class="accordion-item">
						  <h2 class="accordion-header" id="panelsStayOpen-headingFour">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
								How do I contact customer service?
							</button>
						  </h2>
						  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFour">
							<div class="accordion-body">
								You can reach one of our devoted customer service reps toll-free at 1-800-672-4399 anytime, day or night – we're available 24/7. You can also chat or email service@purrfect.com and we'll get right back to you with a response.
							</div>
						  </div>
						</div>
						<div class="accordion-item">
						  <h2 class="accordion-header" id="panelsStayOpen-headingFive">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
								What are your customer service hours?
							</button>
						  </h2>
						  <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
							<div class="accordion-body">
								We're available all day every day, 24/7, 365 days a year.
							</div>
						  </div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="panelsStayOpen-headingSix">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
								Is there a minimum purchase amount for my order?
							  </button>
							</h2>
							<div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
							  <div class="accordion-body">
								No, there is no minimum purchase required. You may purchase as many items to donate as you would like.
							  </div>
							</div>
						  </div>
				
					  </div>
				</div>
			</div>

		</div>
		{{-- /***********/ --}}
	
		<div class="tab-pane {{request()->is('team') ? 'active' :null }}" id="{{url('team')}}" role="tabpanel">
	

			<div class="container-xl img-container">
				<img class="" src="{{asset('tabs-img/team.jpg')}}" style="" alt="">
			</div>
			<div class="container-xl  p-0 mission">
				<div class="tab-pane-header">
					<div class="tab-pane-header-img-container-team">
						<img src="{{asset('tabs-img/icon-team.png')}}" alt="">
					</div>
					<div class="tab-pane-header-desc">
					<h1>Our Team</h1>
					<p>Our leadership team is always looking for new ways to wow our customers, and that desire is shared by the whole Purrfect team.</p>
					</div>
				</div>
			</div>
	</div>
	

	
	
	

</div>
</div>

@endsection
