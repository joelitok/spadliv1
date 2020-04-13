<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Spadli | @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="{{asset('front/assets/css/imports.css')}}" media="screen">
		<link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}" media="screen">
		<link rel="stylesheet" href="{{asset('front/assets/css/owl-carousel.css')}}" media="screen">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="/media/j/html5.js"></script>
        <![endif]-->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        @yield('styles')
	</head>

	<body class="@yield('body-class')">

		<div id="top"></div>

		<!-- Navigation (main menu)
		================================================== -->

		<div class="navbar-wrapper">
			<header class="navbar navbar-default navbar-fixed-top" id="MainMenu">
				<div class="navbar-extra-top clearfix">
					<div class="navbar container-fluid">
						<ul class="nav navbar-nav navbar-left">
							<li class="menu-item"><a href="contact"><i class="fa fa-envelope"></i> Contact Us</a></li>
							<li class="menu-item"><a href="#"><i class="fa fa-suitcase"></i> Join the Explorers!</a></li>
							<li class="menu-item"><a href="auth"><i class="fa fa-sign-in"></i> Sign in</a></li>
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
						<a href="home" class="navbar-brand">
                            <img alt="Spadli" src="{{ asset('front/assets/images/spadli-logobeta.png') }}">
                        </a>
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<nav class="navbar-collapse collapse" id="navbar-main">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="blog.html">News &amp; Articles</a></li>
							<li><a href="page.html">Specials</a></li>
						</ul>
					</nav>
				</div><!-- /.container-fluid -->
			</header>
		</div><!-- /.navbar-wrapper -->


        @yield('content')

		<!-- Footer
		================================================== -->
		<footer id="footer">
			<section class="top-footer regular" style="padding-bottom: 20px; padding-top: 30px;">
				<div class="container">
					<div class="row">

						<h3 class="hidden">More Resources</h3>

						<div class="col-lg-9">
							<div class="footer-content-left">

								<p style="font-size:14px; color:#aaa;">
									<a href="about">About Us</a> &nbsp; | &nbsp;
									<a href="auth">Sign in</a> &nbsp; | &nbsp;
									<a href="cover-with-page-content.html">Be an Explorer!</a> &nbsp; | &nbsp;
									<a href="destinations.html">Destinations</a> &nbsp; | &nbsp;
									<a href="blog.html">Blog</a> &nbsp; | &nbsp;
									<a href="contact">Contact us</a>
								</p>

							</div>
						</div>

						<div class="col-lg-3">
							<div class="footer-content-right">
                                <div style="text-align: right;" class="visible-lg-block">
									<img src="{{ asset('front/assets/images/spadli-logobeta.png') }}" alt="Spadli" width="1024" height="200" style="max-width: 100px; height: 50px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        @yield('scripts')
	</body>
</html>







