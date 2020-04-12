@extends('partials.layout')

@section('title', "Home")

@section('body-class', 'home')

@section('styles')
<link rel="stylesheet" href="{{asset('front/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('front/styles/style.css')}}"/>
@endsection

@section('content')


    <div class="explore-search-cont">
        <div id="bgslides">
            <ul>
                <li style="background-image: url(//dj1ec046erlmc.cloudfront.net/i/explore_main/head_1.jpg);display:list-item;"></li>
                <li style="background-image: url(//dj1ec046erlmc.cloudfront.net/i/explore_main/head_2.jpg);display:none;"></li>
                <li style="background-image: url(//dj1ec046erlmc.cloudfront.net/i/explore_main/head_3.jpg);display:none;"></li>
                <li style="background-image: url(//dj1ec046erlmc.cloudfront.net/i/explore_main/head_4.jpg);display:none;"></li>
            </ul>
        </div>
        <div class="wrapper">
        <div class="el headline">
                <span class="mbreak">Discover</span> Your <a class="cat-link" href="/sleep">Next Destination</a>, <a class="cat-link" href="/food">Flight</a>, <a class="cat-link" href="/food">Hotel</a>, <a class="cat-link" href="/food">Restaurant</a>, <a class="cat-link" href="/play">Store</a>
        </div>
           <p style="color: #f5f7f7;margin-top: -21px;">Have your city, neighborhood and enterprises discovered so it results in a memorable trip for visitors. Let them discover you.” </p>
		  		   <iframe scrolling="no" width="" height="215" frameborder="0" src="//www.travelpayouts.com/widgets/1c47fec03373ed0f7f93d34da4a92073.html?v=1848" style="width: 100%; background-color: #00b0dd;"></iframe>
	  <div class="el search-examples" style="margin-top: 8px;">
	      <span class="mbreak">
	          <strong>Popular Searches</strong>: <a href="#">Destination</a>, <a href="#">Top Picks Cities</a>,</span> <a href="#">Tours</a>, <a href="#">Travel Deals</a></div>
        </div>
    </div>

<div style="height:100px">
</div>


		<!-- Featured Destinations
		================================================== -->
		<section class="featured-destinations">
			<div class="container">
				<div class="cards overlap">

					<!-- Section Title
					<div class="title-row">
						<h3 class="title-entry">Featured Destinations</h3>
						<a href="destinations-list.html" class="btn btn-primary btn-xs">Find More &nbsp; <i class="fa fa-angle-right"></i></a>
					</div>
-->

					<!-- Cards Row -->
					<div class="row">
                        @foreach($posts as $post)
                        @if($post->listing_id == $personalListingId)

                        <div class="col-md-3 col-sm-6 col-xs-12" data-id="{{ $post->id }}" >

                          <article class="card" style="border-radius:4%">
                          <h4 class="card-title" style="background-color:white;padding-left:10px;color:black;font-family: 'Montserrat', sans-serif;">{{$post->title}}</h4>
                          <a href="{{ url('posts/detail/' . $post->id) }}" class="featured-image" style="background-image: url({{ asset('uploads/' . $post->gallery) }})">
                                            <div class="featured-img-inner">
                                            </div>
                                        </a>
								<div class="card-details">
								   <h4 class="card-title">
                                    <a href="{{ url('posts/detail/' . $post->id) }}">
                                                    {{ $post->city }} {{ $post->state }} {{ $post->country }}
                                    </a>
                                </h4>


                                    <p>
                                    <img style="width: 18%; border-radius: 50%; height: 100%;" src="http://placehold.it/300x300" >
                                      Personal <br>
                                      <div class="meta-details clearfix">
                                                     <ul class="hierarchy">
                                                         <li class="symbol"><i class="fa fa-map-marker"></i></li>
                                                         <li><a href="destination-parent.html">Oceania</a></li>
                                                     </ul>
                                                 </div>
                                   </p>











								</div>
							</article>

                        </div>
                        @elseif($post->listing_id == $publicityListingId)
						<div class="col-md-3 col-sm-6 col-xs-12" data-id="{{ $post->id }}">
							<article class="card" style="border-radius:4%">
                            <h4 class="card-title" style="background-color:white;padding-left:10px;color:black;font-family: 'Montserrat', sans-serif;">{{$post->title}}</h4>
                            <a href="{{ url('posts/detail/' . $post->id) }}" class="featured-image post-design" style="background-image: url({{ asset('uploads/' . $post->gallery) }}) ">
                                            <div class="featured-img-inner"></div>
                            </a>

								<div class="card-details">
                                <h4 class="card-title">
                                                <a href="{{ url('posts/detail/' . $post->id) }}">
                                                    {{ $post->city }} {{ $post->state }} {{ $post->country }}
                                                </a>
                                            </h4>
                                            <p class="titlepersonal">Publicity</p>
									<div class="meta-details clearfix">
										<ul class="hierarchy">
											<li class="symbol"><i class="fa fa-map-marker"></i></li>
											<li><a href="destination-parent.html">Europe</a></li>
										</ul>
									</div>

								</div>
							</article>
						</div>

						@elseif($post->listing_id == $salesListingId)
                        <div class="col-md-3 col-sm-6 col-xs-12" data-id="{{ $post->id }}">
							<article class="card" style="border-radius:4%">
                            <h4 class="card-title" style="background-color:white;padding-left:10px;color:black;font-family: 'Montserrat', sans-serif;">{{$post->title}}</h4>
                            <a href="{{ url('posts/detail/' . $post->id) }}" class="featured-image post-design" style="background-image: url({{ asset('uploads/' . $post->gallery) }}) ">
                                            <div class="featured-img-inner"></div>
                            </a>

								<div class="card-details">
                                <h4 class="card-title">
                                                <a href="{{ url('posts/detail/' . $post->id) }}">
                                                    {{ $post->city }} {{ $post->state }} {{ $post->country }}
                                                </a>
                                            </h4>
                                            <p>
                                    <img style="width: 18%; border-radius: 50%; height: 100%;" src="http://placehold.it/300x300" >
                                      Sales
                                      <div class="meta-details clearfix">
                                                     <ul class="hierarchy">
                                                         <li class="symbol"><i class="fa fa-map-marker"></i></li>
                                                         <li><a href="destination-parent.html">Oceania</a></li>
                                                     </ul>
                                                 </div>
                                   </p>


								</div>
							</article>
						</div>

                        @elseif($post->listing_id == $eventsListingId)
                        <div class="col-md-3 col-sm-6 col-xs-12" data-id="{{ $post->id }}">
							<article class="card" style="border-radius:4%">
                            <h4 class="card-title" style="background-color:white;padding-left:10px;color:black;font-family: 'Montserrat', sans-serif;">{{$post->title}}</h4>
                            <a href="{{ url('posts/detail/' . $post->id) }}" class="featured-image post-design" style="background-image: url({{ asset('uploads/' . $post->gallery) }}) ">
                                            <div class="featured-img-inner"></div>
                            </a>

								<div class="card-details">
                                <h4 class="card-title">
                                                <a href="{{ url('posts/detail/' . $post->id) }}">
                                                    {{ $post->city }} {{ $post->state }} {{ $post->country }}
                                                </a>
                                            </h4>
                                            <p class="titlepersonal">Events</p>


									<div class="meta-details clearfix">
										<ul class="hierarchy">
											<li class="symbol"><i class="fa fa-map-marker"></i></li>
											<li><a href="destination-parent.html">Europe</a></li>
										</ul>
									</div>
								</div>
							</article>
						</div>
                        @endif
                        @endforeach





					</div> <!-- /.row -->
				</div>
			</div>
		</section>


		<!-- Home Page Search Section
		================================================== -->
		<section class="regular">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<figure style="text-align:center">
							<img src="assets/images/logo-symbol-complex-colors.png" alt="GoExplore!" width="387" height="214">
						</figure>
					</div>
					<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">

						<div class="col-md-12 col-lg-10 col-lg-offset-1">
							<h3 style="text-align: center;">Be more than just another traveler when you <em>GoExplore!</em></h3>
						</div>
						<div class="col-sm-12">
							<form class="big-search">
								<input type="text" placeholder="Find Your Next Destination...">
								<button type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</form>
						</div>

					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section>


		<!-- Home Page Accordion Section
		================================================== -->
		<section class="regular background">
			<div class="container">
				<div class="row">

					<h3 class="hidden">Destination Categories</h3>

					<div class="col-md-6 col-lg-4">
						<article class="card accordion-card">
							<header>
								<h3 class="section-title">Adventure Seekers</h3>
								<p>With endless hiking trails, these destinations will satisfy the wildest explorers!</p>
                                <div class="explore-search-cont">
                            </header>



							<div class="accordion-panel">
								<div class="panel-group" id="accordion-1" role="tablist" aria-multiselectable="true">
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-20-960x540.jpg');">
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<div class="panel-heading" role="tab" id="headingOne">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Buenos Aires, Argentina</h4>
												<ul class="hierarchy">
													<li>South America</li>
												</ul>
											</div>
										</a>
									</div>
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-11-960x540.jpg');">
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-1" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
											<div class="panel-heading" role="tab" id="headingThree">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Queenstown, New Zealand</h4>
												<ul class="hierarchy">
													<li>Oceania</li>
												</ul>
											</div>
										</a>
									</div>
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-10-960x540.jpg');">
										<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-1" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
											<div class="panel-heading" role="tab" id="headingFour">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Zermatt, Switzerland</h4>
												<ul class="hierarchy">
													<li>Europe</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
							</div>
							<footer><a href="#">Find More &nbsp; <i class="fa fa-arrow-right"></i></a></footer>
						</article> <!-- /.accordion-card -->
					</div>

					<div class="col-md-6 col-lg-4">
						<article class="card accordion-card">
							<header>
								<h3 class="section-title">Beach Lovers</h3>
								<p>Head for a swim and relax on the warm, golden sand. Life's a beach!</p>
							</header>
							<div class="accordion-panel">
								<div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-14-960x540.jpg');">
										<div id="collapseOne-2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
											<div class="panel-heading" role="tab" id="headingOne-2">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Acapulco, Mexico</h4>
												<ul class="hierarchy">
													<li>North America</li>
												</ul>
											</div>
										</a>
									</div>
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-13-960x540.jpg');">
										<div id="collapseTwo-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-2">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-2" aria-expanded="true" aria-controls="collapseTwo-2">
											<div class="panel-heading" role="tab" id="headingTwo-2">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Whitehaven Beach, Australia</h4>
												<ul class="hierarchy">
													<li>Oceania</li>
												</ul>
											</div>
										</a>
									</div>
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-5-960x540.jpg');">
										<div id="collapseThree-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-2" aria-expanded="true" aria-controls="collapseThree-2">
											<div class="panel-heading" role="tab" id="headingThree-2">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Algarve, Portugal</h4>
												<ul class="hierarchy">
													<li>Europe</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
							</div>
							<footer><a href="#">Find More &nbsp; <i class="fa fa-arrow-right"></i></a></footer>
						</article> <!-- /.accordion-card -->
					</div>

					<div class="col-md-12 col-lg-4">
						<article class="card accordion-card">
							<header>
								<h3 class="section-title">Crowd Escapers</h3>
								<p>Step away from the crowd, explore places where you'll feel no one has ever been before.</p>
							</header>
							<div class="accordion-panel">
								<div class="panel-group" id="accordion-3" role="tablist" aria-multiselectable="true">
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-22-960x540.jpg');">
										<div id="collapseOne-3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
											<div class="panel-heading" role="tab" id="headingOne-3">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Galapagos Islands, Ecuador</h4>
												<ul class="hierarchy">
													<li>South America</li>
												</ul>
											</div>
										</a>
									</div>
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-19-960x540.jpg');">
										<div id="collapseThree-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseThree-3" aria-expanded="true" aria-controls="collapseThree-3">
											<div class="panel-heading" role="tab" id="headingThree-3">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Yellowstone, USA</h4>
												<ul class="hierarchy">
													<li>North America</li>
												</ul>
											</div>
										</a>
									</div>
									<!-- Guide Panel -->
									<div class="panel panel-default" style="background-image: url('assets/images/destinations-21-960x540.jpg');">
										<div id="collapseFour-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
											<div class="panel-body">
												<div class="read-more">Details <i class="fa fa-arrow-right"></i></div>
												<a href="guide-single.html"><div class="spacer"></div></a>
											</div>
										</div>
										<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseFour-3" aria-expanded="true" aria-controls="collapseFour-3">
											<div class="panel-heading" role="tab" id="headingFour-3">
												<div class="panel-icon">
													<i class="fa fa-map-marker"></i>
												</div>
												<h4 class="panel-title">Foz do Iguacu, Brasil</h4>
												<ul class="hierarchy">
													<li>South America</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
							</div>
							<footer><a href="#">Find More &nbsp; <i class="fa fa-arrow-right"></i></a></footer>
						</article> <!-- /.accordion-card -->
					</div>

		        </div>
		    </div>
		</section>


		<!-- Full Width Carousel
		================================================== -->

		<section class="featured-slider">

			<h3 class="hidden">Highlights</h3>

			<div class="featured-carousel">
				<div class="item">
					<div class="bg-img" style="background-image: url(assets/images/destination-1.jpg)"></div>
					<div class="color-hue"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-md-offset-6">
								<article>
									<h3>Algarve, Portugal</h3>
									<p class="lead">The Algarve is Portugal's most popular holiday destination....</p>
									<a href="#" class="btn btn-primary">Read More &nbsp; <i class="fa fa-angle-right"></i></a>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="bg-img" style="background-image: url(assets/images/destination-2.jpg)"></div>
					<div class="color-hue"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-md-offset-6">
								<article>
									<h3>London, England</h3>
									<p class="lead">A truly multicultural, megalopolis of people, ideas and frenetic energy. London is divided into thirty-two boroughs, with unlimited opportunity for sightseeing. Packed with excellent ...</p>
									<a href="#" class="btn btn-primary">Read More &nbsp; <i class="fa fa-angle-right"></i></a>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="bg-img" style="background-image: url(assets/images/destination-3.jpg)"></div>
					<div class="color-hue"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-md-offset-6">
								<article>
									<h3>Scala dei Turchi, Italy</h3>
									<p class="lead">Near southern Sicily, the Scala has become an attraction thanks to its unusual white color. Formed by a sedimentary rock with a distinct white color ...</p>
									<a href="#" class="btn btn-primary">Read More &nbsp; <i class="fa fa-angle-right"></i></a>
								</article>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="bg-img" style="background-image: url(assets/images/destination-4.jpg)"></div>
					<div class="color-hue"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-md-offset-6">
								<article>
									<h3>South America</h3>
									<p class="lead">Nestled between the Caribbean, the South Pacific, and the South Atlantic Oceans, South America is the wilder of the Americas, and a continent of superlatives...</p>
									<a href="#" class="btn btn-primary">Read More &nbsp; <i class="fa fa-angle-right"></i></a>
								</article>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="bg-img" style="background-image: url(assets/images/destination-5.jpg)"></div>
					<div class="color-hue"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-md-offset-6">
								<article>
									<h3>North America</h3>
									<p class="lead">North America consists of three large nations and one large island territory: Canada, United States of America, Mexico and Greenland...</p>
									<a href="#" class="btn btn-primary">Read More &nbsp; <i class="fa fa-angle-right"></i></a>
								</article>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>


		<!-- Blog Posts
		================================================== -->

		<section class="regular blog-posts">
			<div class="container">

				<!-- Section Title -->
				<div class="title-row">
					<h3 class="title-entry">News Articles &amp; Blogs</h3>
					<a href="blog.html" class="btn btn-primary btn-xs">Find More &nbsp; <i class="fa fa-angle-right"></i></a>
				</div>

				<div class="row">

					<div class="col-md-3 col-sm-6">
						<article class="post">
							<div class="card">
								<header class="entry-header">
									<a href="single-hero.html">
										<div class="entry-thumbnail" style="background-image: url('assets/images/blog-5-600x800.jpg')">
											<img alt="" title="" src="assets/images/blog-placeholder-vertical.png" width="600" height="800">
										</div>
										<h2 class="entry-title">Living the Travel Lifestyle</h2>
									</a>
								</header>
								<footer class="entry-meta clearfix">
									<span class="byline"><i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="#">Author Name</a></span></span>
									<span class="posted-on"><a href="#" rel="bookmark"><time class="entry-date published" datetime="2014-11-12T00:15:40+00:00">11/12/2014</time></a></span>
								</footer>
							</div>
							<!-- SAMPLE EXCERPT CONTENT
							===============================
								<div class="entry-content">
										<p>Fusce egestas elit eget lorem. Viva mus eleme ntum semper nisi. Duis leo. Suspen disse pulvinar, augue ac venen hatis cond imentum, sem libero volut pat nibh, nec pellen tesque velit pede quis nunc. Morbi mattis ullam corper velit. Proin pretium, leo ac pellen tesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo.<br>
										<a href="#" class="more-link btn btn-sm btn-primary">Continue reading <span class="meta-nav">→</span></a></p>
									</div>
								-->
						</article>
					</div>

					<div class="col-md-3 col-sm-6">
						<article class="post">
							<div class="card">
								<header class="entry-header">
									<a href="single-hero.html">
										<div class="entry-thumbnail" style="background-image: url('assets/images/blog-4-600x800.jpg')">
											<img src="assets/images/blog-placeholder-vertical.png" alt="" title="" width="600" height="800">
										</div>
										<h2 class="entry-title">Choosing Your Next Vacation Destination</h2>
									</a>
								</header>
								<footer class="entry-meta clearfix">
									<span class="byline"><i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="#">Author Name</a></span></span>
									<span class="posted-on"><a href="#" rel="bookmark"><time class="entry-date published" datetime="2014-11-12T00:15:40+00:00">11/12/2014</time></a></span>
								</footer>
							</div>
							<!-- SAMPLE EXCERPT CONTENT
							===============================
							<div class="entry-content">
									<p>Fusce egestas elit eget lorem. Viva mus eleme ntum semper nisi. Duis leo. Suspen disse pulvinar, augue ac venen hatis cond imentum, sem libero volut pat nibh, nec pellen tesque velit pede quis nunc. Morbi mattis ullam corper velit. Proin pretium, leo ac pellen tesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo.<br>
									<a href="#" class="more-link btn btn-sm btn-primary">Continue reading <span class="meta-nav">→</span></a></p>
								</div>
							-->
						</article>
					</div>

					<div class="col-md-3 col-sm-6">
						<article class="post">
							<div class="card">
								<header class="entry-header">
									<a href="single-hero.html">
										<div class="entry-thumbnail" style="background-image: url('assets/images/blog-1-600x800.jpg');">
											<img src="assets/images/blog-placeholder-vertical.png" alt="" title="" width="600" height="800">
										</div>
										<h2 class="entry-title">Unusual Places to Consider Visiting</h2>
									</a>
								</header>
								<footer class="entry-meta clearfix">
									<span class="byline"><i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="#">Author Name</a></span></span>
									<span class="posted-on"><a href="#" rel="bookmark"><time class="entry-date published" datetime="2014-11-12T00:15:40+00:00">11/12/2014</time></a></span>
								</footer>
							</div>
							<!-- SAMPLE EXCERPT CONTENT
							===============================
							<div class="entry-content">
									<p>Fusce egestas elit eget lorem. Viva mus eleme ntum semper nisi. Duis leo. Suspen disse pulvinar, augue ac venen hatis cond imentum, sem libero volut pat nibh, nec pellen tesque velit pede quis nunc. Morbi mattis ullam corper velit. Proin pretium, leo ac pellen tesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo.<br>
									<a href="#" class="more-link btn btn-sm btn-primary">Continue reading <span class="meta-nav">→</span></a></p>
								</div>
							-->
						</article>
					</div>

					<div class="col-md-3 col-sm-6">
						<article class="post">
							<div class="card">
								<header class="entry-header">
									<a href="single-hero.html">
										<div class="entry-thumbnail" style="background-image: url('assets/images/blog-3-600x800.jpg');">
											<img src="assets/images/blog-placeholder-vertical.png" alt="" title="" width="600" height="800">
										</div>
										<h2 class="entry-title">8 Useful Tools for Planning a Great Trip</h2>
									</a>
								</header>
								<footer class="entry-meta clearfix">
									<span class="byline"><i class="fa fa-user"></i> <span class="author vcard"><a class="url fn n" href="#">Author Name</a></span></span>
									<span class="posted-on"><a href="#" rel="bookmark"><time class="entry-date published" datetime="2014-11-12T00:15:40+00:00">11/12/2014</time></a></span>
								</footer>
							</div>
							<!-- SAMPLE EXCERPT CONTENT
							===============================
								<div class="entry-content">
										<p>Fusce egestas elit eget lorem. Viva mus eleme ntum semper nisi. Duis leo. Suspen disse pulvinar, augue ac venen hatis cond imentum, sem libero volut pat nibh, nec pellen tesque velit pede quis nunc. Morbi mattis ullam corper velit. Proin pretium, leo ac pellen tesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo.<br>
										<a href="#" class="more-link btn btn-sm btn-primary">Continue reading <span class="meta-nav">→</span></a></p>
									</div>
								-->
						</article>
					</div>
				</div>
			</div>
		</section>



@stop
