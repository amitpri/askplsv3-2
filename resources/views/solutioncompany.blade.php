<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="AskPls" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Playfair+Display:700,700i,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap_mini.css" type="text/css" />
    <link rel="stylesheet" href="/style_mini.css" type="text/css" />  
    <link rel="stylesheet" href="/askpls.css" type="text/css" />

    <link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" /> 
 
    <link rel="stylesheet" href="/askplsfonts.css" type="text/css" />

    <link rel="stylesheet" href="/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/colors.php?color=1c85e8" type="text/css" /> 

    <script async src="embed.js"></script>  
 

    @include('analytics')
 
    <title>AskPls | Anonymous Review Platform</title>

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
									<h3 class="text-white">Easily Manage the Contents</h3>
									<p class="text-white mb-0">Centralized and easy.</p>
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
<!--
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
-->
				<div class="line"></div>
  

				<div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 offset-1">
								<div class="before-heading">Don't Hesitate to Reach out to Us</div>
									<h2 class="nott t600 display-4">Want to Talk?</h2>
								<h4 class="t300 mb-4">Call us at <a href="tel:+(91)99167 89507">+(91)99167 89507</a></h4>
								<a href="mailto: support@askpls.com" class="button button-rounded button-xlarge m-0 nott t600 ls0 px-5">Email Us</a>
							</div>
						</div>
					</div>
					 
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder" style="background-color: #155BBC; padding-top: 80px">

	 

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="nobg dark pt-0">

				<div class="line mt-0"></div>

				<div class="container clearfix">

					<div class="row">
						<div class="col-12">
							<p class="mb-2 text-white-50">Copyrights © 2019 All Rights Reserved by AskPls.</p>
							 
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