<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="description" content="HopeSoft Grate Software With Low Cost">
		<meta name="author" content="HopeSoft">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ -->
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="HopeSoft" width="100"></a>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">@yield('nav1')</a></li>
												<li><a href="#about">@yield('nav2')</a></li>
												<li><a href="#services">@yield('nav3')</a></li>
												<li><a href="#portfolio">@yield('nav4')</a></li>
												<li><a href="#clients">@yield('nav5')</a></li>
												<li><a href="#contact">@yield('nav6')</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">We are <span>HopeSoft</span></h1>
							<p class="lead text-center">@yield('home_lead_text')</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About <span>HopeSoft</span></h1>
						<p class="lead text-center">@yield('about_lead_text')</p>

						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<img src="images/section-image-1.png" alt="">
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<p>@yield('about_list_header')</p>
								<ul class="list-unstyled">
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> @yield('about_list_1')</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> @yield('about_list_2')</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> @yield('about_list_3')</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> @yield('about_list_4')</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> @yield('about_list_5')</li>
								</ul>
							</div>
						</div>
						<div class="space"></div>
						<h2>@yield('about_second_header')</h2>
						<div class="row">
							<div class="col-md-6">
								<p>@yield('about_para_1')</p>
								<p>@yield('about_para_2')</p>
								<p>@yield('about_para_3')</p>
							</div>
							<div class="col-md-6">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													@yield('about_accordion_1')
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												@yield('about_accordion_text_1')
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													@yield('about_accordion_2')
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												@yield('about_accordion_text_2')
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													@yield('about_accordion_3')
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												@yield('about_accordion_text_3')
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg bg-image-1 blue">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services"  class="text-center title">Worthy Services</h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-sm-6">
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">@yield('service_name_1')</h4>
								<p>@yield('service_text_1')</p>
							</div>
							<div class="media-right">
								<i class="fa fa-cog"></i>
							</div>
						</div>
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">@yield('service_name_2')</h4>
                                <p>@yield('service_text_2')</p>
							</div>
							<div class="media-right">
								<i class="fa fa-check"></i>
							</div>
						</div>
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">@yield('service_name_3')</h4>
                                <p>@yield('service_text_3')</p>
							</div>
							<div class="media-right">
								<i class="fa fa-desktop"></i>
							</div>
						</div>
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">@yield('service_name_4')</h4>
                                <p>@yield('service_text_4')</p>
							</div>
							<div class="media-right">
								<i class="fa fa-users"></i>
							</div>
						</div>
					</div>
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<div class="media">
							<div class="media-left">
								<i class="fa fa-leaf"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">@yield('service_name_5')</h4>
                                <p>@yield('service_text_5')</p>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-area-chart"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">@yield('service_name_6')</h4>
                                <p>@yield('service_text_6')</p>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-child"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">@yield('service_name_7')</h4>
                                <p>@yield('service_text_7')</p>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-codepen"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">@yield('service_name_8')</h4>
                                <p>@yield('service_text_8')</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space blue">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">Let's Work Together!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio">Portfolio</h1>
				<div class="separator"></div>
				<p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
				<br>
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
							    <li class="active"><a href="#" data-filter="*">All</a></li>
								@yield('portfolio_filters')
							</ul>
						</div>
						<!-- isotope filters end -->

						<!-- portfolio items start -->
					<div class="isotope-container row grid-space-20">
							@yield('portfolio')



						<!-- portfolio items end -->

					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg bg-image-2 pb-clear">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="clients" class="title text-center">Clients</h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-1.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">You are Amazing!</h3>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo.</p>
									<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-2.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Yeah!</h3>
								<blockquote>
									<p>Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus.</p>
									<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-3.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Thank You!</h3>
								<blockquote>
									<p>Aperiam consequatur quo quis exercitationem reprehenderit suscipit iste placeat.</p>
									<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-2.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Thank You!</h3>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo.</p>
									<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-3.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Amazing!</h3>
								<blockquote>
									<p>Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus.</p>
									<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-1.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Best!</h3>
								<blockquote>
									<p>Aperiam consequatur quo quis exercitationem reprehenderit suscipit iste placeat.</p>
									<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section start -->
			<!-- ================ -->
			<div class="translucent-bg blue">
				<div class="container">
					<div class="list-horizontal">
						<div class="row">
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-1.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-2.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-3.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-4.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-5.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-6.png" alt="client">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">10000+ Happy Clients!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">Contact Us</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">@yield('contact_header')</p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i> @yield('address')</li>
									<li><i class="fa fa-phone pr-10"></i> @yield('phone1')</li>
									<li><i class="fa fa-fax pr-10"></i> @yield('phone2')</li>
									<li><i class="fa fa-envelope-o pr-10"></i> @yield('email')</li>
								</ul>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
									<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2014 Worthy by HopeSoft</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>

