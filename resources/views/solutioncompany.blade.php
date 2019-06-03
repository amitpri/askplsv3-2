<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/style.css" type="text/css" />
	<link rel="stylesheet" href="/css/dark.css" type="text/css" />

	<link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
 
	<link rel="stylesheet" href="/css/colors.php?color=267DF4" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="/demos/coworking/css/fonts.css" type="text/css" /> <!-- Theme Font -->
	<link rel="stylesheet" href="/demos/coworking/coworking.css" type="text/css" /> <!-- Theme CSS -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>AskPls | Companies </title>

</head>

<body class="stretched side-push-panel">

	<div id="side-panel">

        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

        <div class="side-panel-wrap">

            <div class="widget clearfix">

                <h4 class="t400">Login</h4>
                
                <div class="line line-sm"></div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="col_full"> 
                        <label for="email" class="t400">{{ __('E-Mail Address') }}</label> 
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col_full">
                        <label for="login-form-password" class="t400">Password:</label>  
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col_full nobottommargin">
                        <button class="button button-rounded t400 nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                        <br>   <br> 
                        <a href="/register" class=" ">Register</a> |       <a href="/password/reset" class=" ">Forgot Password?</a>
                    </div>

                </form>


            </div>

        </div>

    </div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <div class="row justify-content-xl-between justify-content-lg-between clearfix">

                        <div class="col-lg-2 col-12 d-flex align-self-center"> 
                            <div id="logo">
                                <a href="/" class="standard-logo"><img src="/images/logo.png" alt="AskPls"></a>
                                <a href="/" class="retina-logo"><img src="/images/logo@2x.png" alt="AskPls"></a>
                            </div> 

                        </div>

                        <div class="col-lg-8 col-12 d-xl-flex d-lg-flex justify-content-xl-center justify-content-lg-center"> 
                            <nav id="primary-menu" class="with-arrows fnone clearfix">
                                <ul> 
                                    <li><a href="/"><div>Home</div></a></li> 
                                    <li><a href="/topics"><div>Topics</div></a></li> 
                                    <li><a href="#"><div>Solutions</div></a>
                                        <ul>
                                            <li><a href="/s/company"><div>Company Solution</div></a></li>  
                                        </ul>
                                    </li>
                                    <li><a href="/about"><div>About</div></a></li> 
                                    <li><a href="/prices"><div>Prices</div></a></li> 
                                    <li><a href="/support"><div>Support</div></a></li> 
                                </ul>
                            </nav> 
                        </div>

                        @if (Route::has('login'))
                            @if (Auth::check())
                                <div class="col-lg-2 d-none d-lg-inline-flex d-xl-inline-flex justify-content-end nomargin"> 
                                    <div id="side-panel-trigger"  > 
                                        
                                        <a href="/portal" class="d-none d-lg-block">Portal <i class="icon-line-arrow-right"></i></a>
                                    </div> 
                                </div> 
                            @else
                                <div class="col-lg-2 d-none d-lg-inline-flex d-xl-inline-flex justify-content-end nomargin"> 
                                    <div id="side-panel-trigger" class="side-panel-trigger">
                                        <a href="#" class="d-block d-lg-none"><i class="icon-line-lock"></i></a>
                                        
                                        <a href="#" class="d-none d-lg-block">Sign In <i class="icon-line-arrow-right"></i></a>
                                    </div> 
                                </div>                           
                            @endif
                        @endif
                        
                        <a href="#" class="d-block d-lg-none mobile-side-panel side-panel-trigger"><i class="icon-line-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </header>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pt-3 pb-0">

				<div class="section nobg py-2">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2 class="display-4 t600 ls--2">We are making better <span class="text-rotater" data-separator="|" data-rotate="fadeIn" data-speed="3000">
									<span class="t-rotate"> Environment|Colleagues|Managers|Work culture</span>
								</span> for you.</h2>
							</div>
							<div class="col-md-5">
								<p class="lead text-muted">
									Helping organizations and different teams to understand real issues by collecting genuine feedbacks. Specifically created teplates from the standards maintained in the organizations.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="ohidden parallax d-flex align-items-center" data-bottom-top="background-position:0px 200px;" data-top-bottom="background-position:0px -400px;" style="background-image: url('/demos/coworking/images/hero.jpg'); background-size: cover; height: 600px; width: 100%;">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<h2 class="text-white">AskPls gives you abibility to collect genuine feedbacks in the best possible way either through the publicly sharable contents or something very specifically created for the target audience. </h2>
							</div>
						</div>
					</div>
				</div>

				<div class="bg-theme-light">
					<div class="shadow-sm hero-features bgcolor dark shadow">
						<div class="row">
							<div class="col-md-4 mt-3 mt-md-0">
								<div class="feature-box fbox-plain fbox-small fbox-dark  mb-0">
									<div class="fbox-icon">
										<i class="icon-line-circle-check"></i>
									</div>
									<h3 class="text-white">Easily Manage the Topics of interests</h3>
									<p class="text-white mb-0">Centralized and easy. Available only what is needed and nothing more.</p>
								</div>
							</div>

							<div class="col-md-4 mt-3 mt-md-0">
								<div class="feature-box fbox-plain fbox-small fbox-dark mb-0">
									<div class="fbox-icon">
										<i class="icon-line-circle-check"></i>
									</div>
									<h3 class="text-white">Affordable pricing.</h3>
									<p class="text-white mb-0">Pricing based at number of employees</p>
								</div>
							</div>

							<div class="col-md-4 mt-3 mt-md-0">
								<div class="feature-box fbox-plain fbox-small fbox-dark mb-0">
									<div class="fbox-icon">
										<i class="icon-line-circle-check"></i>
									</div>
									<h3 class="text-white">Secured &amp; Friendly.</h3>
									<p class="text-white mb-0">Very simple to use and focused on the exact needs.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section mt-0 pt-md-5 pt-0">
					<div class="container clearfix">
						<div class="row align-items-md-center mb-5">
							<div class="col-md-6 pr-5">
								<div class="heading-block mb-4 nobottomborder">
									<div class="before-heading"><a href="">Know More</a></div>
									<h2 class="nott t600">Genuine Reviews for growing stronger</h2>
								</div>
								<div class="row">
									<div class="col-6 col-sm-6 mb-4">
										<div class="counter color t600"><span data-from="1" data-to="125" data-refresh-interval="2" data-speed="600"></span>+</div>
										<h5 class="mt-0 t500">Companies</h5>
									</div>

									<div class="col-6 col-sm-6 mb-4">
										<div class="counter color t600"><span data-from="1" data-to="10000" data-refresh-interval="11" data-speed="900"></span>+</div>
										<h5 class="mt-0 t500">User Profiles</h5>
									</div>

									<div class="col-6 col-sm-6 mb-4">
										<div class="counter color t600"><span data-from="1" data-to="1000" data-refresh-interval="3" data-speed="1000"></span>+</div>
										<h5 class="mt-0 t500">Topics per Month</h5>
									</div>

									<div class="col-6 col-sm-6 mb-4">
										<div class="counter color t600"><span data-from="100" data-to="10000" data-refresh-interval="100" data-speed="1500"></span>+</div>
										<h5 class="mt-0 t500">Reviews</h5>
									</div>
								</div>
								<p class="text-muted">Getting genuine feedbacks for any subject either for a simple things or for a complex process helps you understands the impact on the employees and take corrective measures.  </p>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="card shadow-sm border-light">
									<img src="/demos/coworking/images/features/3.jpg" alt="Featured image 1" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title t600 color">Public Topics</h5>
										<p class="card-text">Publicly sharable topics for reviews from anywhere.</p>
									</div>
								</div>
								<div class="card shadow-sm border-light mt-4">
									<img src="/demos/coworking/images/features/2.jpg" alt="Featured image 2" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title t600 color">Private Topics</h5>
										<p class="card-text">Privately sharable topics for specific topics for indvidual or groups.</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 pl-sm-3 mt-3 mt-sm-0">
								<div class="card shadow-sm border-light">
									<img src="/demos/coworking/images/features/1.jpg" alt="Featured image 3" class="card-img-top">
									<div class="card-body">
										<p class="card-text">Manage profiles and groups and understands the different viewpoints</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">

					<div class="row justify-content-between">

						<!-- Feature Box
						============================================= -->
						<div class="col-lg-4 col-md-6 my-4">
							<i class="icon-wifi-full color ml-0 mb-4 i-plain d-block fnone"></i>
							<h4 class="mb-3">Profile Management</h4>
							<p class="text-muted">Create employees profiles or upload all together easily for your entire database.</p>
						</div>

						<!-- Feature Box
						============================================= -->
						<div class="col-lg-4 col-md-6 my-4">
							<i class="icon-line2-cup color ml-0 mb-3 i-plain d-block fnone"></i>
							<h4 class="mb-3">Group Management</h4>
							<p class="text-muted">Create multiple groups quickly and add profiles who needs to be reviewing the topics</p>
						</div>

						<!-- Feature Box
						============================================= -->
						<div class="col-lg-4 col-md-6 my-4">
							<i class="icon-line2-screen-desktop color ml-0 mb-3 i-plain d-block fnone"></i>
							<h4 class="mb-3">Multiple type of Topics</h4>
							<p class="text-muted">Create Private or Public Topics. Upload pictures and videos as well.</p>
						</div>

						<!-- Feature Box
						============================================= -->
						<div class="col-lg-4 col-md-6 my-4">
							<i class="icon-line2-lock color ml-0 mb-3 i-plain d-block fnone"></i>
							<h4 class="mb-3">Topics dispatch</h4>
							<p class="text-muted">Send topic to the target group or profiles and track the delivery. Or you can also share that of your own for public topics.</p>
						</div>

						<!-- Feature Box
						============================================= -->
						<div class="col-lg-4 col-md-6 my-4">
							<i class="icon-fingerprint color ml-0 mb-3 i-plain d-block fnone"></i>
							<h4 class="mb-3">Reviews</h4>
							<p class="text-muted">Control if the reviews can be seen publicly or only by you. Check reviews per topics in real time and export the data for further analysis.</p>
						</div>

						<!-- Feature Box
						============================================= -->
						<div class="col-lg-4 col-md-6 my-4">
							<i class="icon-line2-printer color ml-0 mb-3 i-plain d-block fnone"></i>
							<h4 class="mb-3">100% Secure</h4>
							<p class="text-muted">Your reviews and topics are non sharable</p>
						</div>

						 
					</div>
				</div>

				<div class="section" style="padding: 80px 0">
					<div class="container">
						<div class="heading-block nobottomborder mb-0">
							<div class="before-heading">Select your Plan</div>
							<h2 class="nott t600 mb-0">Membership</h2>
						</div>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-12">
								<div id="price-carousel" class="owl-carousel carousel-widget" data-margin="30" data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="3" data-items-xl="3">

									<div class="price-list shadow-sm card border-0 rounded">
										<div class="position-relative">
											<img src="/demos/coworking/images/membership/1-day.jpg" alt="Featured image 1" class="card-img-top rounded-top">
											<div class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
												<h3 class="card-title mb-0 text-white">Day Pass</h3>
												<p class="card-text mb-0">Give it a Try</p>
											</div>
										</div>
										<div class="card-body">

											<div class="price-title pb-3">$19<small>Per Day</small></div>

											<ul class="list-group list-group-flush mb-4">
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Day Access Only</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Unlimited Superfast Wi-Fi</li>
											  <li class="list-group-item pl-0 text-black-50"><i class="icon-line-check pr-3 color"></i> <del>No lockers</del></li>
											</ul>

											<a href="#" class="button button-rounded button-large btn-block m-0 center t500">Sign Up</a>

										</div>
									</div>

									<div class="price-list shadow-sm card border-0 rounded">
										<div class="position-relative">
											<img src="/demos/coworking/images/membership/share.jpg" alt="Featured image 1" class="card-img-top rounded-top">
											<div class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
												<h3 class="card-title mb-0 text-white">Shared Desk</h3>
												<p class="card-text mb-0">Economical but Flexible</p>
											</div>
										</div>
										<div class="card-body">

											<div class="price-title pb-3">$99<small>Monthly</small></div>

											<ul class="list-group list-group-flush mb-4">
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> 8am to 8pm Access</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> 100 hours of Superfast Wi-Fi</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Lockers Access</li>
											  <li class="list-group-item pl-0 text-black-50"><i class="icon-line-check pr-3 color"></i> <del>No Printers</del></li>
											</ul>

											<a href="#" class="button button-rounded button-large btn-block m-0 center t500">Sign Up</a>

										</div>
									</div>

									<div class="price-list shadow-sm card border-0 rounded">
										<div class="position-relative">
											<img src="/demos/coworking/images/membership/flexible.jpg" alt="Featured image 1" class="card-img-top rounded-top">
											<div class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
												<h3 class="card-title mb-0 text-white">Flexible Desk</h3>
											<p class="card-text mb-0">Any Desk, Any Chair</p>
											</div>
										</div>
										<div class="card-body">

											<div class="price-title pb-3">$149<small>Monthly</small></div>

											<ul class="list-group list-group-flush mb-4">
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> 200 hours of WIFI per Month</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Lockers Access</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> 50 pages Printers</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> 5hrs Skype Booth</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Mailing Address</li>
											</ul>

											<a href="#" class="button button-rounded button-large btn-block m-0 center t500">Sign Up</a>

										</div>
									</div>

									<div class="price-list shadow-sm card border-0 rounded">
										<div class="position-relative">
											<img src="/demos/coworking/images/membership/private.jpg" alt="Featured image 1" class="card-img-top rounded-top">
											<div class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
												<h3 class="card-title mb-0 text-white">Private Desk</h3>
											<p class="card-text mb-0">Its all Yours!</p>
											</div>
										</div>
										<div class="card-body">

											<div class="price-title pb-3">$249<small>Monthly</small></div>

											<ul class="list-group list-group-flush mb-4">
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Private Desk + Locker</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> 500 hours of WIFI per Month</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Meeting Room Access</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Unlimited Printers</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Unlimited Skype Booth</li>
											  <li class="list-group-item pl-0"><i class="icon-line-check pr-3 color"></i> Mailing Address</li>
											</ul>

											<a href="#" class="button button-rounded button-large btn-block m-0 center t500">Sign Up</a>

										</div>
									</div>

								</div>
							</div>
							<div class="col-md-11 mt-5 offset-md-1">
								<h3>Terms &amp; Conditions</h3>
								<ul class="pl-4 mb-0">
									<li class="mb-1">Hours indicated are access to the space NOT the WIFI or Internet Connection.</li>
									<li class="mb-1">Payment is upfront. We accept Cash and VISA/Master Cards, 2% Credit Card surcharge applies.</li>
									<li class="mb-1">Monthly Plan starts from the point of signup for 30 days.</li>
									<li class="mb-1">Sorry NO Pausing Memberships and NO Cancellations.</li>
									<li class="mb-1">Sorry NO Upgrading Plans you need to use the hours in the plan.</li>
									<li class="mb-1">If you run out of hours you can buy additional hours at the rate above, through our website or front desk.</li>
									<li class="mb-1">If you wish to change plan once you’re on a plan this is done only at the end of the month or once you use your hours.</li>
									<li class="mb-1">Additional Printing is charged at &dollar;0.30 for Black and White A4 & A3 and &dollar;2 for Colour A4 & A3.</li>
									<li class="mb-1">Skype Booths must be booked before 1 day &amp; the keys can be collected at the frontdesk. Additional Skype Booth usage will be charged at &dollar;5 per hour.</li>
									<li class="mb-1">Storage Lockers are first come first serve and are subject to availability.</li>
									<li class="mb-1">Additional Charge for Mail Delivery.</li>
									<li class="mb-1">Pets are not allowed.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="section clearfix nobg">
					<div class="container">
						<div class="heading-block nobottomborder center">
							<div class="before-heading">Some Of Gallery Pictures</div>
							<h2 class="nott t600 mb-0">Gallery</h2>
						</div>
					</div>
					<div id="image-carousel" class="owl-carousel carousel-widget" data-margin="24" data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="2" data-items-xl="2" style="padding: 0 20px" data-lightbox="gallery">
						<div class="slide slide--1">
							<div class="carousel-column-container">
								<ul class="carousel-column column-1">
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/1.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/1.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/2.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/2.jpg');"></a>
									</li>
								</ul>
								<ul class="carousel-column column-2">
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/3.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/3.jpg'); min-height: 300px"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/4.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/4.jpg'); min-height: 280px"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/5.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/5.jpg'); min-height: 200px"></a>
									</li>
								</ul>
							</div>
						</div>

						<div class="slide slide--2">
							<div class="carousel-column-container">
								<ul class="carousel-column column-1">
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/6.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/6.jpg'); min-height: 324px"></a>
									</li>
									<li class="carousel-grid-item">
										<div class="item bgcolor d-flex align-items-center px-4" style="min-height: 480px">
											<blockquote class="blockquote border-0 mb-0">
												<p class="mb-3 text-white">"The Spirit of CoWorking Allows You to Find CoWorkers Who're Worth Working with."</p>
												<footer class="blockquote-footer text-white-50 font-italic">Cynthia Chiam</footer>
											</blockquote>
										</div>
									</li>
								</ul>
								<ul class="carousel-column column-2">
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/8.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/8.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/9.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/9.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/10.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/10.jpg');"></a>
									</li>
								</ul>
							</div>
						</div>

						<div class="slide slide--3">
							<div class="carousel-column-container">
								<ul class="carousel-column column-1">
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/11.jpg" data-lightbox="gallery-item" class="item bgcolor d-flex align-items-center px-4 img-overlay" style="background-image: url('/demos/coworking/images/gallery/11.jpg'); min-height: 350px">
											<blockquote class="blockquote border-0 mb-0">
												<p class="mb-3 text-white">"I Belive in Collaboration Rather Than Competition"</p>
												<footer class="blockquote-footer text-white-50 font-italic">Cynthia Chiam</footer>
											</blockquote>
										</a>
									</li>
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/12.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/12.jpg'); min-height: 453px"></a>
									</li>
								</ul>
								<ul class="carousel-column column-2">
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/13.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/13.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/14.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/14.jpg');"></a>
									</li>
									<li class="carousel-grid-item">
										<a href="/demos/coworking/images/gallery/15.jpg" data-lightbox="gallery-item" class="item" style="background-image: url('/demos/coworking/images/gallery/15.jpg');"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="section p-0 testimonials clearfix">
					<div class="container" style="padding: 120px 0">
						<div class="heading-block nobottomborder center">
							<div class="before-heading">What our Members Say</div>
							<h2 class="nott t600">Testimonials</h2>
							<p class="mb-0 mt-1"><span class="t600">Excellent, 9.6</span> out of 10 based on <span class="t600">2,118</span> reviews. </p>
						</div>

						<div id="testimonials-carousel" class="owl-carousel carousel-widget testimonial testimonial-full nobgcolor noborder noshadow nopadding divcenter tleft clearfix" data-animate-in="fadeIn" data-animate-out="fadeOut" data-margin="24" data-nav="false" data-pagi="true" data-items="1" style="max-width: 740px">
							<div class="slide">
								<div class="testi-content">
									<div class="testi-stars mb-4">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
									</div>
									<p>Collaboratively enhance intermandated innovation via cutting-edge core competencies. Professionally extend covalent e-markets and mission-critical communities. Dramatically communicate revolutionary web services for interactive synergy. Synergistically.</p>
									<div class="testi-meta mt-4">
										Steve Jobs
										<span class="ls0">Apple Inc.</span>
									</div>
								</div>
							</div>
							<div class="slide">
								<div class="testi-content">
									<div class="testi-stars mb-4">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half2"></i>
									</div>
									<p>Intrinsicly synergize excellent content whereas user friendly action items. Rapidiously transition multimedia based information after top-line alignments. Authoritatively integrate accurate outsourcing vis-a-vis principle-centered systems energistically</p>
									<div class="testi-meta mt-4">
										Collis Ta'eed
										<span class="ls0">Envato Inc.</span>
									</div>
								</div>
							</div>
							<div class="slide">
								<div class="testi-content">
									<div class="testi-stars mb-4">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
									</div>
									<p>Compellingly engage multimedia based niche markets via value-added manufactured products. Competently formulate goal-oriented content for installed base users. Uniquely leverage other's granular ROI without 24/365 collaboration and idea-sharing.</p>
									<div class="testi-meta mt-4">
										John Doe
										<span class="ls0">XYZ Inc.</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="section nobg clearfix" style="padding: 80px 0">
					<div class="container">
						<div class="row justify-content-between align-items-center">
							<div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1 bottommargin-lg">
								<a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-video position-relative"><img src="/demos/coworking/images/video-bg.jpg" alt="Video Image" class="rounded-lg shadow-lg">
									<i class="icon-play"></i>
								</a>
							</div>
							<div class="col-lg-5 col-md-6 mt-0 mt-md-4">
								<div class="feature-box fbox-plain fbox-small">
									<div class="fbox-icon">
										<i class="icon-line2-magic-wand"></i>
									</div>
									<h3>Easily Manage Your Works</h3>
									<p>Quickly impact virtual testing procedures vis-a-vis viral e-commerce. Completely myocardinate seamless.</p>
								</div>

								<div class="feature-box fbox-plain fbox-small">
									<div class="fbox-icon">
										<i class="icon-line2-clock"></i>
									</div>
									<h3>24x7 Access</h3>
									<p>Authoritatively create one-to-one relationships for B2B "outside the box" thinking. Dramatically seize.</p>
								</div>

								<div class="feature-box fbox-plain fbox-small mb-0">
									<div class="fbox-icon">
										<i class="icon-line2-speech"></i>
									</div>
									<h3>Great Community</h3>
									<p>Proactively evolve user-centric paradigms rather than exceptional core. Authoritatively brand unique.</p>
								</div>
							</div>

							<div class="col-lg-5 col-md-6 mt-5 mt-md-0">
								<h2 class="ls0">Get One Day Free Trial.</h2>
								<p class="text-muted mb-5" style="font-size: 18px;">Enthusiastically embrace diverse e-markets after sustainable applications. Collaboratively impact intermandated systems vis-a-vis progressive information.</p>
								<div class="d-flex">
									<a href="#" class="button button-rounded button-xlarge d-block flex-fill m-0 center nott t600 ls0">Sign Up</a>
									<a href="#" class="button button-rounded button-xlarge d-block flex-fill button-border m-0 ml-3 center nott t600 ls0">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="line"></div>

				<div class="section p-0 nobg clearfix">
					<div class="container">
						<div class="row mb-2">
							<div class="col-lg-6 col-md-4">
								<div class="heading-block nobottomborder mb-4">
									<div class="before-heading">How do you Contact Us</div>
									<h2 class="nott t600">Locations</h2>
								</div>
							</div>

							<div class="col-lg-6 col-md-8">
								<div class="row">
									<div class="col-sm-4 col-3">
										<div class="counter color t600"><span data-from="1" data-to="3" data-refresh-interval="2" data-speed="600"></span>+</div>
										<h5 class="mt-0 t500">Branches</h5>
									</div>

									<div class="col-sm-4 col-6">
										<div class="counter color t600"><span data-from="100" data-to="4500" data-refresh-interval="100" data-speed="1500"></span>+</div>
											<h5 class="mt-0 t500">Active Members</h5>
									</div>

									<div class="col-sm-4 col-3">
										<div class="counter color t600"><span data-from="2" data-to="100" data-refresh-interval="30" data-speed="1500"></span>%</div>
											<h5 class="mt-0 t500">Secured</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="locations-carousel" class="owl-carousel carousel-widget owl-carousel-full clearfix" data-animate-in="fadeIn" data-animate-out="fadeOut" data-speed="200" data-margin="0" data-nav="true" data-pagi="true" data-items="1">
						<div>
							<div class="masonry-thumbs grid-5" data-big="2" data-lightbox="gallery">
								<a href="/demos/coworking/images/location/thumbs/full/1.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/1.jpg" alt="Gallery Thumb 1"></a>
								<a href="#"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835253572242!2d144.95373531531297!3d-37.817327679751735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1554124945593!5m2!1sen!2sin" width="500" height="334" allowfullscreen  style="border:0;"></iframe></a>
								<a href="/demos/coworking/images/location/thumbs/full/2.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/2.jpg" alt="Gallery Thumb 12"></a>
								<a href="/demos/coworking/images/location/thumbs/full/3.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/3.jpg" alt="Gallery Thumb 3"></a>
								<a href="/demos/coworking/images/location/thumbs/full/4.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/4.jpg" alt="Gallery Thumb 4"></a>
								<a href="/demos/coworking/images/location/thumbs/full/5.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/5.jpg" alt="Gallery Thumb 5"></a>
								<a href="/demos/coworking/images/location/thumbs/full/6.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/6.jpg" alt="Gallery Thumb 6"></a>
								<a href="/demos/coworking/images/location/thumbs/full/7.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/7.jpg" alt="Gallery Thumb 7"></a>
								<a href="/demos/coworking/images/location/thumbs/full/8.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/8.jpg" alt="Gallery Thumb 13"></a>
								<a href="/demos/coworking/images/location/thumbs/full/9.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/9.jpg" alt="Gallery Thumb 6"></a>
								<a href="/demos/coworking/images/location/thumbs/full/10.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/10.jpg" alt="Gallery Thumb 7"></a>
								<a href="/demos/coworking/images/location/thumbs/full/11.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/11.jpg" alt="Gallery Thumb 12"></a>
							</div>
							<div class="container">
								<div class="card shadow bg-white">
									<div class="card-body">
										<h3 class="mb-4">Melbourne</h3>
										<div style="font-size: 16px;">
											<address>
												121 King St,<br>Melbourne VIC 3000,<br>Australia
											</address>
											<div class="mb-4" style="font-size: 15px;">
												<small class="text-black-50 d-block mb-2">Phone Number:</small>
												<a href="tel:+(61)3-222-333-44" class="text-dark d-block mb-1">+(61)3-222-333-44</a>
												<a href="tel:+(61)3-234-532-45" class="text-dark">+(61)3-234-532-45</a>
											</div>

											<a href="#" class="button button-rounded m-0 nott t600 ls0">Email Us</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="masonry-thumbs grid-5" data-big="1,6" data-lightbox="gallery">
								<a href="#"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835253572242!2d144.95373531531297!3d-37.817327679751735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1554124945593!5m2!1sen!2sin" width="500" height="334" allowfullscreen  style="border:0;"></iframe></a>
								<a href="/demos/coworking/images/location/thumbs/full/5.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/5.jpg" alt="Gallery Thumb 5"></a>
								<a href="/demos/coworking/images/location/thumbs/full/2.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/2.jpg" alt="Gallery Thumb 12"></a>
								<a href="/demos/coworking/images/location/thumbs/full/4.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/4.jpg" alt="Gallery Thumb 4"></a>
								<a href="/demos/coworking/images/location/thumbs/full/1.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/1.jpg" alt="Gallery Thumb 1"></a>
								<a href="/demos/coworking/images/location/thumbs/full/9.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/9.jpg" alt="Gallery Thumb 6"></a>
								<a href="/demos/coworking/images/location/thumbs/full/3.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/3.jpg" alt="Gallery Thumb 3"></a>
								<a href="/demos/coworking/images/location/thumbs/full/6.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/6.jpg" alt="Gallery Thumb 6"></a>
								<a href="/demos/coworking/images/location/thumbs/full/7.jpg" data-lightbox="gallery-item"><img src="/demos/coworking/images/location/thumbs/7.jpg" alt="Gallery Thumb 7"></a>
							</div>
							<div class="container">
								<div class="card shadow bg-white">
									<div class="card-body">
										<h3 class="mb-4">Sydney</h3>
										<div style="font-size: 16px;">
											<address>
												Bennelong Point,<br>Sydney NSW 2000,<br>Australia.
											</address>
											<div class="mb-4" style="font-size: 15px;">
												<small class="text-black-50 d-block mb-2">Phone Number:</small>
												<a href="tel:+(61)2-222-333-44" class="text-dark d-block mb-1">+(61)2-222-333-44</a>
												<a href="tel:+(61)2-234-532-45" class="text-dark">+(61)2-234-532-45</a>
											</div>

											<a href="#" class="button button-rounded m-0 nott t600 ls0">Email Us</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<img src="/demos/coworking/images/location/perth.jpg" alt="Perth">
							<div class="container">
								<div class="card shadow bg-white">
									<div class="card-body">
										<h3 class="mb-4">Perth</h3>
										<div style="font-size: 16px;">
											<address>
												Fraser Ave,<br>Perth WA 6005,<br>Australia
											</address>
											<div class="mb-4" style="font-size: 15px;">
												<small class="text-black-50 d-block mb-2">Phone Number:</small>
												<a href="tel:+(61)8-222-333-44" class="text-dark d-block mb-1">+(61)8-222-333-44</a>
												<a href="tel:+(61)8-234-532-45" class="text-dark">+(61)8-234-532-45</a>
											</div>

											<div class="d-flex">
												<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54159.94533455547!2d115.81934154447853!3d-31.96098939372422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a525098d1f2f%3A0xec4a7b90626730e7!2sKings+Park+and+Botanic+Garden!5e0!3m2!1sen!2sin!4v1554279269646!5m2!1sen!2sin" data-lightbox="iframe" class="button button-rounded button-border m-0 nott t500 ls0">View Map</a>
											<a href="#" class="button button-rounded m-0 nott t600 ls0 ml-2">Email Us</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section nobg clearfix">
					<div class="container">
						<div class="heading-block nobottomborder center">
							<div class="before-heading">See What's Up in Latest</div>
							<h2 class="nott t600">News &amp; Events</h2>
						</div>

						<div class="clear"></div>

						<div class="row mb-5">
							<div class="col-md-4 mt-5">
								<article class="ipost">
									<div class="entry-title">
										<h3><a href="#">A Meetup for People Currently Running an e-Commerce Business</a></h3>
									</div>
									<div class="entry-content clearfix">
										<p>Synergistically expedite focused experiences through orthogonal "outside the box" thinking. Collaboratively reconceptualize e-commerce via effective applications. Enthusiastically conceptualize go forward functionalities vis-a-vis sticky partnerships. Distinctively underwhelm premier scenarios without synergistic best practices. Globally target cross-platform.</p>
									</div>
									<div class="author-meta d-flex align-items-center">
										<div class="author-image">
											<img src="/demos/articles/images/authors/1.jpg" alt="Author Image" class="rounded-circle">
										</div>
										<ul class="entry-meta m-0 clearfix">
											<li><span>By</span> <a href="#">Hanson Deck</a></li>
											<li class="mb-0"><a href="#">Mar 11, 2016</a></li>
										</ul>
									</div>
								</article>
							</div>

							<div class="col-md-4 mt-5">
								<article class="ipost">
									<div class="entry-title">
										<h3><a href="#">Creating Your Own Demand as a Digital Nomad</a></h3>
									</div>
									<div class="entry-content clearfix">
										<p>Pellentesque hic illo beatae rhoncus sint, quis, fugiat imperdiet unde architecto magna dui hymenaeos autem lorem eligendi.</p>
									</div>
									<div class="author-meta d-flex align-items-center">
										<div class="author-image">
											<img src="/demos/articles/images/authors/2.jpg" alt="Author Image" class="rounded-circle">
										</div>
										<ul class="entry-meta m-0 clearfix">
											<li><span>By</span> <a href="#">Hanson Deck</a></li>
											<li class="mb-0"><a href="#">Mar 11, 2016</a></li>
										</ul>
									</div>
								</article>
							</div>

							<div class="col-md-4 mt-5">
								<article class="ipost">
									<div class="entry-title">
										<h3><a href="#">Succeeding Remotely Within A Stateside Team</a></h3>
									</div>
									<div class="entry-content clearfix">
										<p>Pellentesque hic illo beatae rhoncus sint, quis, fugiat imperdiet unde architecto magna dui hymenaeos autem lorem eligendi.</p>
									</div>
									<div class="author-meta d-flex align-items-center">
										<div class="author-image">
											<img src="/demos/articles/images/authors/3.jpg" alt="Author Image" class="rounded-circle">
										</div>
										<ul class="entry-meta m-0 clearfix">
											<li><span>By</span> <a href="#">Hanson Deck</a></li>
											<li class="mb-0"><a href="#">Mar 11, 2016</a></li>
										</ul>
									</div>
								</article>
							</div>

						</div>
					</div>

				</div>

				<div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 offset-1">
								<div class="before-heading">Don't Hesitate to Reach out to Us</div>
									<h2 class="nott t600 display-4">Want to Talk?</h2>
								<h4 class="t300 mb-4">Call us at <a href="tel:+(61)8-234-532-45">+(61)8-234-532-45</a></h4>
								<a href="#" class="button button-rounded button-xlarge m-0 nott t600 ls0 px-5">Email Us</a>
							</div>
						</div>
					</div>
					<img src="/demos/coworking/images/footer-bg.jpg" alt="Footer Image" class="footer-img">
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder" style="background-color: #155BBC; padding-top: 80px">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap dark pb-5 clearfix">

					<div class="row">

						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott text-white">Features</h4>

								<ul class="list-unstyled ml-0">
									<li class="mb-2"><a href="#">Help Center</a></li>
									<li class="mb-2"><a href="#">Paid with Moblie</a></li>
									<li class="mb-2"><a href="#">Status</a></li>
									<li class="mb-2"><a href="#">Contact Support</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott text-white">Support</h4>

								<ul class="list-unstyled ml-0">
									<li class="mb-2"><a href="#">Home</a></li>
									<li class="mb-2"><a href="#">About</a></li>
									<li class="mb-2"><a href="#">FAQs</a></li>
									<li class="mb-2"><a href="#">Support</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott text-white">Trending</h4>

								<ul class="list-unstyled ml-0">
									<li class="mb-2"><a href="#">Shop</a></li>
									<li class="mb-2"><a href="#">Portfolio</a></li>
									<li class="mb-2"><a href="#">Blog</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott text-white">Get to Know us</h4>

								<ul class="list-unstyled ml-0">
									<li class="mb-2"><a href="#">Corporate</a></li>
									<li class="mb-2"><a href="#">Agency</a></li>
									<li class="mb-2"><a href="#">eCommerce</a></li>
									<li class="mb-2"><a href="#">Personal</a></li>
								</ul>

							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div id="instagram" class="widget clearfix">

								<h4 class="ls0 mb-4 nott text-white">Instagram Photos</h4>
								<div id="instagram-photos" class="instagram-photos masonry-thumbs grid-5" data-user="5834720953" data-count="15" data-type="user"></div>

							</div>
						</div>

						<div class="line"></div>

						<div class="row">
							<div class="col-sm-3">
								<a href="index.html"><img src="/demos/coworking/images/logo-footer.png" alt="Logo Footer" class="mb-4" height="20"></a>
								<p class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<a href="#" class="social-icon si-small si-light si-facebook" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon si-small si-light si-twitter" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon si-small si-light si-github" title="Github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>
								<a href="#" class="social-icon si-small si-light si-instagram" title="instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
							</div>
							<div class="col-sm-9">
								<ul class="list-numbers">
									<li class="text-white-50 t300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores voluptatum corporis, repellat assumenda, cumque labore nam fuga deserunt harum, magni asperiores iure? Quos nobis molestiae dolorum obcaecati ad omnis, sint.</li>
									<li class="text-white-50 t300 mb-0">Completely embrace real-time systems whereas fully tested schemas. Synergistically actualize state of the art functionalities vis-a-vis cross-platform data. Conveniently reinvent web-enabled bandwidth via cost effective e-tailers. Proactively engage compelling outsourcing after virtual synergy. Distinctively formulate granular.
									</li>
								</ul>
							</div>
						</div>

					</div>

				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="nobg dark pt-0">

				<div class="line mt-0"></div>

				<div class="container clearfix">

					<div class="row">
						<div class="col-12">
							<p class="mb-2 text-white-50">Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.</p>
							<div class="copyright-links text-white-50"><a href="#" class="text-white-50">Terms of Use</a> / <a href="#" class="text-white-50">Privacy Policy</a></div>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/js/functions.js"></script>

</body>
</html>