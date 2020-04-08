<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Destination | GoExplore! Travel Website Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="{{ asset('assets/asset/css/imports.css') }}" media="screen">
		<link rel="stylesheet" href="{{asset('assets/asset/css/bootstrap.min.css')}}" media="screen">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="destination destination-home">

		<div id="top"></div>

		<!-- Navigation (main menu)
		================================================== -->

		<div class="navbar-wrapper">
			<header class="navbar navbar-default navbar-fixed-top" id="MainMenu">
				<div class="navbar-extra-top clearfix">
					<div class="navbar container-fluid">
					<ul class="nav navbar-nav navbar-left">
							<li class="menu-item"><a href="contact.html"><i class="fa fa-envelope"></i> Contact Us</a></li>
							<li class="menu-item"><a href="#"><i class="fa fa-suitcase"></i> Join the Explorers!</a></li>
							<li class="menu-item"><a href="login.html"><i class="fa fa-sign-in"></i> Sign in</a></li>
						</ul>
					<div class="navbar-top-right">
						 	<ul class="nav navbar-nav navbar-right">
								<li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram fa-fw"></i></a></li>
							</ul> 
							<form class="navbar-form navbar-right navbar-search" role="search" action="search.html">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
							</form>
						</div>
					</div>
				</div>

				<div class="container-fluid collapse-md" id="navbar-main-container">
					<div class="navbar-header">

					
<div style="text-align: right;" class="visible-lg-block">
									<img src="{{ asset('assets/images/Spadli-logobeta-1.png') }}" alt="Spadli" width="1024" height="565" style="max-width: 175px;">
								</div>



					<!-- 	<a href="index.html" class="navbar-brand"><img alt="GoExplore!" src="assets/images/logo.png"><span class="sr-only">&nbsp; GoExplore!</span></a>
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>-->
					</div>      

					

				<!--	<nav class="navbar-collapse collapse" id="navbar-main" class="container-fluid">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown show-on-hover">
								<a class="dropdown-toggle" data-toggle="dropdown" href="destinations.html">Destinations</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu show-on-hover">
										<a class="dropdown-toggle" data-toggle="dropdown" href="destination-parent.html">Africa</a>
										<ul class="dropdown-menu">
											<li><a href="destination-sub-page.html">Algeria</a></li>
											<li><a href="destination-sub-page.html">Cape Verde</a></li>
											<li><a href="destination-sub-page.html">Egypt</a></li>
											<li><a href="destination-sub-page.html">Ghana</a></li>
											<li><a href="destination-sub-page.html">Kenya</a></li>
											<li><a href="destination-sub-page.html">Morocco</a></li>
											<li><a href="destination-sub-page.html">South Africa</a></li>
											<li><a href="destination-sub-page.html">Uganda</a></li>
											<li><a href="destination-sub-page.html">Western Sahara</a></li>
											<li><a href="destination-sub-page.html">Zambia</a></li>
										</ul>

									</li>
									<li class="dropdown-submenu show-on-hover">
										<a class="dropdown-toggle" data-toggle="dropdown" href="destination-parent.html">Asia</a>
										<ul class="dropdown-menu">
											<li><a href="destination-sub-page.html">Bhutan</a></li>
											<li><a href="destination-sub-page.html">Cambodia</a></li>
											<li><a href="destination-sub-page.html">China</a></li>
											<li><a href="destination-sub-page.html">India</a></li>
											<li><a href="destination-sub-page.html">Japan</a></li>
											<li><a href="destination-sub-page.html">Malaysia</a></li>
											<li><a href="destination-sub-page.html">Nepal</a></li>
											<li><a href="destination-sub-page.html">Singapore</a></li>
											<li><a href="destination-sub-page.html">Thailand</a></li>
											<li><a href="destination-sub-page.html">Vietnam</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu show-on-hover">
										<a class="dropdown-toggle" data-toggle="dropdown" href="destination-parent.html">Canada</a>
										<ul class="dropdown-menu">
											<li><a href="destination-sub-page.html">Alberta</a></li>
											<li><a href="destination-sub-page.html">British Columbia</a></li>
											<li><a href="destination-sub-page.html">Montréal</a></li>
											<li><a href="destination-sub-page.html">Nova Scotia</a></li>
											<li><a href="destination-sub-page.html">Ontario</a></li>
											<li><a href="destination-sub-page.html">Québec</a></li>
											<li><a href="destination-sub-page.html">Toronto</a></li>
											<li><a href="destination-sub-page.html">Vancouver</a></li>

										</ul>
									</li>
									<li class="dropdown-submenu show-on-hover">
										<a class="dropdown-toggle" data-toggle="dropdown" href="destination-parent.html">Central America </a>
										<ul class="dropdown-menu">
											<li><a href="destination-sub-page.html">Belize</a></li>
											<li><a href="destination-sub-page.html">Costa Rica</a></li>
											<li><a href="destination-sub-page.html">El Salvador</a></li>
											<li><a href="destination-sub-page.html">Guatamala</a></li>
											<li><a href="destination-sub-page.html">Honduras</a></li>
											<li><a href="destination-sub-page.html">Nicaragua</a></li>
											<li><a href="destination-sub-page.html">Panama</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu show-on-hover">
										<a class="dropdown-toggle" data-toggle="dropdown" href="destination-parent.html">Europe</a>
										<ul class="dropdown-menu">
											<li><a href="destination-sub-page.html">Belgium</a></li>
											<li><a href="destination-sub-page.html">Denmark</a></li>
											<li><a href="destination-sub-page.html">France</a></li>
											<li><a href="destination-sub-page.html">Greece</a></li>
											<li><a href="destination-sub-page.html">Ireland</a></li>
											<li><a href="destination-sub-page.html">Sweden</a></li>
											<li><a href="destination-sub-page.html">Spain</a></li>
											<li><a href="destination-sub-page.html">Ukraine</a></li>
											<li><a href="destination-sub-page.html">United Kingdom</a></li>
										</ul>
									</li>

									<li class="dropdown-submenu show-on-hover">
										<a class="dropdown-toggle" data-toggle="dropdown" href="destination-parent.html">United States</a>
										<ul class="dropdown-menu">
											<li><a href="destination-sub-page.html">Alaska</a></li>
											<li><a href="destination-sub-page.html">California</a></li>
											<li><a href="destination-sub-page.html">Florida</a></li>
											<li><a href="destination-sub-page.html">Georgia</a></li>
											<li><a href="destination-sub-page.html">Hawaii</a></li>
											<li><a href="destination-sub-page.html">New York</a></li>
											<li><a href="destination-sub-page.html">Nevada</a></li>
											<li><a href="destination-sub-page.html">Texas</a></li>
											<li><a href="destination-sub-page.html">Utah</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li class="dropdown show-on-hover">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Explore</a>
								<ul class="dropdown-menu">
									<li><a href="destinations-list.html">Adventure</a></li>
									<li><a href="destinations-list.html">Beaches</a></li>
									<li><a href="destinations-list.html">City Life</a></li>
									<li><a href="destinations-list.html">Culture &amp; History</a></li>
									<li><a href="destinations-list.html">Family Fun</a></li>
									<li><a href="destinations-list.html">Mountains</a></li>
									<li><a href="destinations-list.html">Off the Beaten Path</a></li>
									<li><a href="destinations-list.html">Stunning Vistas</a></li>
								</ul>
							</li>

							<li><a href="blog.html">News &amp; Articles</a></li>
							<li><a href="page.html">Specials</a></li>
						</ul>
					</nav>  -->
				</div><!-- /.container-fluid -->
			</header>
		</div><!-- /.navbar-wrapper -->


		<!-- Hero Section
		================================================== -->
		<section class="hero destination-header" style="background-image: url('{{ asset('uploads/' . $post->gallery) }}');">
			<div class="bg-overlay">
				<div class="container">
					<div class="intro-wrap">
						<h1 class="intro-title">  {{ $post->title }}  </h1>
						<!--  North America <div class="intro-text">
							<p>And more text below if you need it...</p>
						</div> -->
						<ul class="breadcrumbs">
							<!-- North America <li class="no-arrow"><a href="#" class="destination-context-menu"><i class="fa fa-ellipsis-v"></i><a></li> -->
							<li class="no-arrow"><i class="icon fa fa-map-marker"></i></li>
							<li><a href="destination-parent.html">  {{ $post->country }}</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>


		<!-- Sub Navigation
		================================================== -->
		<div class="sub-nav">
			<div class="navbar navbar-inverse affix-top" id="SubMenu" style="top: 74px;">
				<div class="container">
					<div class="navbar-header">
						<a href="javascript:void(0)" class="navbar-brand scrollTop"><i class="fa fa-fw fa-map-marker"></i> North America</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-sub">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Sub Nav Links -->
					<nav class="navbar-collapse collapse" id="navbar-sub">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="destinations-list.html">Places</a></li>
							<li class="dropdown show-on-hover">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="guide-single.html">About</a></li>
									<li><a href="guide-single.html">Planning a Trip</a></li>
									<li><a href="guide-single.html">Getting Around</a></li>
									<li><a href="guide-single.html">History &amp; Culture</a></li>
									<li><a href="guide-single.html">Top Attractions</a></li>
									<li><a href="guide-single.html">Travel Resources</a></li>
									<li><a href="guide-single.html">Highlights</a></li>
									<li><a href="guide-single.html">Events</a></li>
									<li><a href="guide-single.html">Itineraries</a></li>
								</ul>
							</li>
							<li class="dropdown show-on-hover">
								<a href="directory-category.html" class="dropdown-toggle" data-toggle="dropdown">Directory <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="directory-category.html">Food &amp; Drinks</a></li>
									<li><a href="directory-category.html">Attractions</a></li>
									<li><a href="directory-category.html">Services</a></li>
									<li><a href="directory-category.html">Activities</a></li>
									<li><a href="directory-category.html">Shopping</a></li>
									<li><a href="directory-category.html">Nightlife</a></li>
									<li><a href="directory-category.html">Tours</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Articles</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><i class="fa fa-fw fa-heart-o"></i></a></li>
							<li class="dropdown show-on-hover">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-share-alt"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#"><i class="fa fa-fw fa-facebook-official"></i> Facebook</a></li>
									<li><a href="#"><i class="fa fa-fw fa-twitter"></i> Twitter</a></li>
									<li><a href="#"><i class="fa fa-fw fa-google-plus"></i> Google +</a></li>
									<li><a href="#"><i class="fa fa-fw fa-pinterest"></i> Pinterest</a></li>
									<li><a href="#"><i class="fa fa-fw fa-instagram"></i> Instagram</a></li>
									<li><a href="#"><i class="fa fa-fw fa-envelope"></i> Email</a></li>
								</ul>
							</li>
							<li><a href="#" data-toggle="tooltip" title="Download in PDF format."><i class="fa fa-fw fa-file-pdf-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" title="Print and take with you!"><i class="fa fa-fw fa-print"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


		<!-- Main Section
		================================================== -->

		<section class="main">
			<div class="container">

				<h3 class="hidden">Destination</h3>

				<div class="row">
					<div class="col-sm-12 col-fixed-content">
						<div class="intro">
							<p class="lead"><!--
North America consists of three large nations and one large 
island territory: Canada, United States of America, Mexico and Greenland.
							-->
							{{$post->title}}						
							</p>
							<div class="entry-content">
								<p>
								
								 <!--With a surface area of 24,221,490km² (9,351,969 square miles), between 
								the Pacific Ocean and the Atlantic Ocean and to the north of South America. North America’s 
								highest point is Alaska’s Mount McKinley, which rises to 6,194m (20,320 ft) above sea 
								level. There are also seven smaller nations at its southern
								 extreme (collectively known as Central America), around two dozen island nations and 
								 territories of various sizes in the Caribbean, and one isolated French territory 
								 off the Canadian Atlantic coast.
								 
								-->

								{{$post->description}}
								 
								 </p>
							</div>
						</div>
						<section class="narrow places">
							<div class="title-row">
								<h3 class="title-entry">Places in North America</h3> <a href="destinations.html" class="btn btn-primary btn-xs">Find More &nbsp; <i class="fa fa-angle-right"></i></a></div>
							<div class="row">
								<div class="col-sm-6">
									<article class="place-box card">
										<a href="destination-sub-page.html" class="place-link">
											<header>
												<h3 class="entry-title"><i class="fa fa-map-marker"></i>San Francisco, USA</h3> </header>
											<div class="entry-thumbnail"> <img width="960" height="540" src="assets/images/destinations-17-960x540.jpg" class="attachment-place wp-post-image" alt=""></div>
										</a>
									</article>
								</div>
								<div class="col-sm-6">
									<article class="place-box card">
										<a href="destination-sub-page.html" class="place-link">
											<header>
												<h3 class="entry-title"><i class="fa fa-map-marker"></i>Yellowstone, USA</h3> </header>
											<div class="entry-thumbnail"> <img width="960" height="540" src="assets/images/destinations-19-960x540.jpg" class="attachment-place wp-post-image" alt=""></div>
										</a>
									</article>
								</div>
							</div>
						</section>
						<section class="narrow page-info">
							<div class="title-row">
								<h3 class="title-entry">Information</h3> <a href="guide-single.html" class="btn btn-primary btn-xs">Find More &nbsp; <i class="fa fa-angle-right"></i></a></div>
							<div class="row">
								<div class="col-sm-12 col-lg-8">
									<a href="guide-single.html" class="page-box-link">
										<article class="page-box">
											<h3 class="entry-title">About</h3>
											<p class="entry-excerpt">Spread across a large area, this destination is nothing if not diverse. Choosing a single place to focus your time, that is a true challenge. There are attractions everywhere so be ready to come back another day, and after some time here, that’s
												exactly what you’ll want to do. Exploring the Area The biggest cities are along the coast. History …</p>
											<p class="more-link">Read more</p>
											<div class="page-box-destination"> <span><i class="fa fa-map-marker"></i> North America</span></div>
										</article>
									</a>
								</div>
								<div class="col-sm-6 col-lg-4">
									<a href="guide-single.html" class="page-box-link">
										<article class="page-box">
											<h3 class="entry-title">Planning a Trip</h3>
											<p class="entry-excerpt">Visas Check with the appropriate consulate or embassy in your country to find out if you will need a visa to visit the country of your destination, especially for an extended period of time. Some countries have extremely detailed and complicated
												entry/departure laws, and treat visits of a week or two very differently from longer stays. Money If you’re traveling …</p>
											<p class="more-link">Read more</p>
											<div class="page-box-destination"> <span><i class="fa fa-map-marker"></i> North America</span></div>
										</article>
									</a>
								</div>
								<div class="col-sm-6 col-lg-4">
									<a href="guide-single.html" class="page-box-link">
										<article class="page-box">
											<h3 class="entry-title">Getting Around</h3>
											<p class="entry-excerpt">A perfect city for exploring on foot with a shop around every corner. Much of the inner city can be walked without trouble, however, in parts walking include crowds, uneven streets, heavy traffic, and skinny sidewalks. If that’s a problem, there
												are plenty of taxi’s to ride in and scooters to rent. How to Travel Subway – The metro is …</p>
											<p class="more-link">Read more</p>
											<div class="page-box-destination"> <span><i class="fa fa-map-marker"></i> North America</span></div>
										</article>
									</a>
								</div>
								<div class="col-sm-6 col-lg-4">
									<a href="guide-single.html" class="page-box-link">
										<article class="page-box">
											<h3 class="entry-title">History &amp; Culture</h3>
											<p class="entry-excerpt">Early History Home to years of history, which stretched far and wide. Due to the characteristic weather, the earliest explorers completely bypassed the area. The first settlement in the area was founded 1770 as a mission community. In addition
												to the mission, a military fort was built. Upon gaining independence, the area grew quickly. The old system gradually came to …</p>
											<p class="more-link">Read more</p>
											<div class="page-box-destination"> <span><i class="fa fa-map-marker"></i> North America</span></div>
										</article>
									</a>
								</div>
								<div class="col-sm-6 col-lg-4">
									<a href="guide-single.html" class="page-box-link">
										<article class="page-box">
											<h3 class="entry-title">Top Attractions</h3>
											<p class="entry-excerpt">Take a look at each of our stunning locations and imagine yourself there: Lakes and Mountains Stay in our four star lakeside accommodation, whether you choose one of our log chalets or a contemporary apartment, you will look over stunning views
												of the valley. Perhaps go for a gentle stroll around the local village, a refreshing swim in the beautifully …</p>
											<p class="more-link">Read more</p>
											<div class="page-box-destination"> <span><i class="fa fa-map-marker"></i> North America</span></div>
										</article>
									</a>
								</div>
							</div>
						</section>
						<section class="narrow directory">
							<div class="title-row">
								<h3 class="title-entry">Directory</h3> <a href="directory-category.html" class="btn btn-primary btn-xs">Find More &nbsp; <i class="fa fa-angle-right"></i></a></div>
							<div class="row">
								<div class="col-sm-6 col-lg-4">
									<article class="place-box card">
										<a href="directory-category.html" class="place-link">
											<header>
												<h3 class="entry-title"><i class="fa fa-folder"></i>Food &amp; Drinks</h3> </header>
											<div class="entry-thumbnail"> <img width="960" height="540" src="assets/images/directory-1.jpg" class="attachment-place wp-post-image" alt="spices"></div>
										</a>
									</article>
								</div>
								<div class="col-sm-6 col-lg-4">
									<article class="place-box card">
										<a href="directory-category.html" class="place-link">
											<header>
												<h3 class="entry-title"><i class="fa fa-folder"></i>Attractions</h3> </header>
											<div class="entry-thumbnail"> <img width="960" height="540" src="assets/images/directory-2.jpg" class="attachment-place wp-post-image" alt="park"></div>
										</a>
									</article>
								</div>
								<div class="col-sm-6 col-lg-4">
									<article class="place-box card">
										<a href="directory-category.html" class="place-link">
											<header>
												<h3 class="entry-title"><i class="fa fa-folder"></i>Services</h3> </header>
											<div class="entry-thumbnail"> <img width="960" height="540" src="assets/images/directory-3.jpg" class="attachment-place wp-post-image" alt="camera-old"></div>
										</a>
									</article>
								</div>
								<div class="col-sm-6 col-lg-4">
									<article class="place-box card">
										<a href="directory-category.html" class="place-link">
											<header>
												<h3 class="entry-title"><i class="fa fa-folder"></i>Activities</h3> </header>
											<div class="entry-thumbnail"> <img width="960" height="540" src="assets/images/directory-4.jpg" class="attachment-place wp-post-image" alt="segway-tour"></div>
										</a>
									</article>
								</div>
								<div class="col-sm-6 col-lg-4">
									<article class="place-box card">
										<a href="directory-category.html" class="place-link">
											<header>
												<h3 class="entry-title"><i class="fa fa-folder"></i>Shopping</h3> </header>
											<div class="entry-thumbnail"> <img width="960" height="540" src="assets/images/directory-5.jpg" class="attachment-place wp-post-image" alt="mall"></div>
										</a>
									</article>
								</div>
								<div class="col-sm-6 col-lg-4">
									<article class="place-box card">
										<a href="directory-category.html" class="place-link">
											<header>
												<h3 class="entry-title"><i class="fa fa-folder"></i>Nightlife</h3> </header>
											<div class="entry-thumbnail"> <img width="960" height="540" src="assets/images/directory-6.jpg" class="attachment-place wp-post-image" alt="music-bar-2"></div>
										</a>
									</article>
								</div>
							</div>
						</section>
						<section class="narrow blog-posts-alt">
							<div class="title-row">
								<h3 class="title-entry">Articles</h3> <a href="blog.html" class="btn btn-primary btn-xs">Find More &nbsp; <i class="fa fa-angle-right"></i></a></div>
							<div class="row">
								<div class="col-sm-12">
									<article class="post">
										<div class="row">
											<div class="col-sm-4">
												<a href="single-hero.html" rel="bookmark">
													<div class="entry-thumbnail card"> <img width="600" height="800" src="assets/images/blog-7-600x800.jpg" alt=""></div>
												</a>
											</div>
											<div class="col-sm-8">
												<header class="entry-header"> <a href="single-hero.html" rel="bookmark"><h2 class="entry-title">Living the Travel Lifestyle</h2> </a>
													<div class="entry-meta"> <span class="icon-meta"> <span class="byline"> <i class="fa fa-user"></i> <span class="author vcard"><a href="#" title="Posts by Olivia" rel="author">Olivia</a></span> </span>
														</span> &nbsp; <span class="icon-meta"> <span class="posted-on"> <i class="fa fa-calendar"></i> <span class="meta-item">May 11, 2015</span> </span>
														</span>
													</div>
												</header>
												<div class="entry-content">
													<p>You know what you said about the structures becoming shackles. You were right and I can’t take it, the injustice. I mean, no one ever’s gonna know who saved the entire city. Gotham’s been good to our family, but the city’s been suffering. People
														less fortunate than us have been enduring very hard times. So we built a new, cheap, …</p> <a href="single-hero.html" class="more-link btn btn-sm btn-primary">Continue reading <span class="meta-nav"> &nbsp; <i class="fa fa-arrow-right"></i></span></a></div>
											</div>
										</div>
									</article>
									<article class="post">
										<div class="row">
											<div class="col-sm-4">
												<a href="single-hero.html" rel="bookmark">
													<div class="entry-thumbnail card"> <img width="600" height="800" src="assets/images/blog-6-600x800.jpg" alt=""></div>
												</a>
											</div>
											<div class="col-sm-8">
												<header class="entry-header"> <a href="single-hero.html" rel="bookmark"><h2 class="entry-title">Choosing Your Next Vacation Destination</h2> </a>
													<div class="entry-meta"> <span class="icon-meta"> <span class="byline"> <i class="fa fa-user"></i> <span class="author vcard"><a href="#" title="Posts by Jack" rel="author">Jack</a></span> </span>
														</span> &nbsp; <span class="icon-meta"> <span class="posted-on"> <i class="fa fa-calendar"></i> <span class="meta-item">May 6, 2015</span> </span>
														</span>
													</div>
												</header>
												<div class="entry-content">
													<p>Spot something, big eyes, big eyes, crouch, shake butt, prepare to pounce then cats take over the world. Stretch find something else more interesting peer out window, chatter at birds, lure them to mouth purr.Stare at the wall, play with food
														and get confused by dust. Eat and than sleep on your face. While eating hunt by meowing loudly at …</p> <a href="single-hero.html" class="more-link btn btn-sm btn-primary">Continue reading <span class="meta-nav"> &nbsp; <i class="fa fa-arrow-right"></i></span></a></div>
											</div>
										</div>
									</article>
									<article class="post">
										<div class="row">
											<div class="col-sm-4">
												<a href="single-hero.html" rel="bookmark">
													<div class="entry-thumbnail card"> <img width="600" height="800" src="assets/images//blog-5-600x800.jpg" alt=""></div>
												</a>
											</div>
											<div class="col-sm-8">
												<header class="entry-header"> <a href="single-hero.html" rel="bookmark"><h2 class="entry-title">Unusual Places to Consider Visiting</h2> </a>
													<div class="entry-meta"> <span class="icon-meta"> <span class="byline"> <i class="fa fa-user"></i> <span class="author vcard"><a href="#" title="Posts by Emily" rel="author">Emily</a></span> </span>
														</span> &nbsp; <span class="icon-meta"> <span class="posted-on"> <i class="fa fa-calendar"></i> <span class="meta-item">April 20, 2015</span> </span>
														</span>
													</div>
												</header>
												<div class="entry-content">
													<p>You’re a good guy, mon frere. That means brother in French. I don’t know how I know that. I took four years of Spanish. I figured out a way to make money while I’m working! What’s gotten into you? Have you been eating cheese? Hahahahah! Turns
													out he ended up getting too friendly with the teddy bear. Cinque Terre, Italy …</p>
													<a href="single-hero.html" class="more-link btn btn-sm btn-primary">Continue reading
														<span class="meta-nav"> &nbsp; <i class="fa fa-arrow-right"></i></span>
													</a>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</section>
					</div>
					<div class="col-sm-12 col-fixed-sidebar">
						<div class="sidebar-padder">
							<aside id="text-2" class="widget widget_text">
								<div class="textwidget"><img src="assets/images/sidebar-ad.jpg" width="300" height="600" alt="my travel agency" title="Find out where you belong."></div>
							</aside>
							<aside class="widget widget_nav_menu">
								<h3 class="widget-title">Top Destinations</h3>
								<div class="menu-top-destinations-container">
									<ul id="menu-top-destinations" class="menu">
										<li class="menu-item">
											<a href="destination-sub-page.html">London, England</a>
										</li>
										<li class="menu-item">
											<a href="destination-sub-page.html">Sydney, Australia</a>
										</li>
										<li class="menu-item">
											<a href="destination-sub-page.html">Chicago, USA</a>
										</li>
										<li class="menu-item">
											<a href="destination-sub-page.html">San Francisco, USA</a>
										</li>
										<li class="menu-item">
											<a href="destination-sub-page.html">Toronto, Canada</a>
										</li>
										<li class="menu-item">
											<a href="destination-sub-page.html">Buenos Aires, Arge
										ntina</a></li>
										<li class="menu-item">
											<a href="destination-sub-page.html">Queenstown, New Zealand</a>
										</li>
										<li class="menu-item">
											<a href="destination-sub-page.html">Santorini, Greece</a>
										</li>
									</ul>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Footer
		================================================== -->
	<!--	<footer id="footer">
			<section class="top-footer regular">
				<div class="container">
					<div class="row">

						<h3 class="hidden">More Resources</h3>

						<div class="col-lg-9">
							<div class="footer-content-left">

								<p style="font-size:14px; color:#aaa;">
									<a href="page.html">About Us</a> &nbsp; | &nbsp;
									<a href="login.html">Sign in</a> &nbsp; | &nbsp;
									<a href="cover-with-page-content.html">Be an Explorer!</a> &nbsp; | &nbsp;
									<a href="destinations.html">Destinations</a> &nbsp; | &nbsp;
									<a href="blog.html">Blog</a> &nbsp; | &nbsp;
									<a href="contact.html">Contact us</a>
								</p>

								<p style="font-size:14px; color: #999; margin-bottom:0;">
									<strong>An HTML travel template for destinations, guides, blogs, hotels, resorts, tours, vacations, events, and more for a perfect travel experience!</strong>

									<br>Created by <a href="http://para.llel.us" target="_blank">Parallelus</a> and available for purchase on <a href="http://para.llel.us/+/get-goexplore-html" target="_blank">ThemeForest</a>.
								</p>

							</div>
						</div>

						<div class="col-lg-3">
							<div class="footer-content-right">
								<div style="text-align: right;" class="visible-lg-block">
									<img src="assets/images/logo-symbol-complex-colors.png" alt="GoExplore!" width="1024" height="565" style="max-width: 175px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="sub-footer">
				<div class="container">
					<div class="row">

						<h3 class="hidden">About</h3>

						<div class="col-xs-12">
							<span style="color:#999; font-size: 15px;" class="pull-right">
								<a href="http://para.llel.us/+/get-goexplore-html" target="_blank" class="text-info" style="text-decoration:none;">
									<strong><i class="fa fa-download"></i> &nbsp; Download GoExplore!</strong>
								</a>
							</span>

							<span style="color:#999; font-size: 13px;">&copy; 2015 Parallelus | GoExplore! HTML Travel Template. Terms of Use and Privacy Policy.</span>
						</div>
					</div>
				</div>
			</section>
		</footer>          -->




		<footer id="footer">
			<section class="top-footer regular">
				<div class="container">
					<div class="row">
						<h3 class="hidden">More Resources</h3>
						<div class="col-lg-9">
							<div class="footer-content-left">
								<p style="font-size:14px; color:#aaa;">
									<a href="page.html">About Us</a> &nbsp; | &nbsp;
									<a href="login.html">Sign in</a> &nbsp; | &nbsp;
									<a href="cover-with-page-content.html">Be an Explorer!</a> &nbsp; | &nbsp;
									<a href="destinations.html">Destinations</a> &nbsp; | &nbsp;
									<a href="blog.html">Blog</a> &nbsp; | &nbsp;
									<a href="contact.html">Contact us</a>
								</p>

								
							</div>
						</div>

						<div class="col-lg-3">
							<div class="footer-content-right">
								<div style="text-align: right;" class="visible-lg-block">
									<img src="{{ asset('assets/images/Spadli-logobeta-1.png') }}" alt="Spadli" width="1024" height="565" style="max-width: 175px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="sub-footer">
				<div class="container">
					<div class="row">

						<h3 class="hidden">About</h3>

						<div class="col-xs-12">
							
							<span style="color:#999; font-size: 13px;">&copy; 2020 Spadli | Terms of Use and Privacy Policy.</span>
						</div>
					</div>
				</div>
			</section>
		</footer>









		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/custom.js"></script>
	</body>
</html>