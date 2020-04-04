<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spadli | Home</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=0.75"/>
    <link rel="canonical" href="https://everplaces.com/"/>  
    <meta property="fb:app_id" content="209213619111441"/>
    <meta name="apple-itunes-app" content="app-id=472735836">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/imports.css') }}" media="screen">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" media="screen">
	<link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}" media="screen">
	<link rel="shortcut icon" type="image/png" href="{{ asset('img/Spadli-logobeta.png') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}"/>
    <!--[if lt IE 9]>
        <script src="/media/j/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
	    .heart-clicked{
            color: blue !important;
	    }
	    .heart-unclicked{
	        margin-top: 2%; margin-left: 2%; color: white; font-size: 14px;
	    }
	    .show-modal{
	        display: block !important;
	    }
	    .overflow-hidden{
	        overflow-y: hidden;
	    }
	    .eclips1{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 230px;
            float: left;
        }
        .image-box{
            width:615px;
        }
	</style>
</head>
<body class="home" style="overflow-x: hidden;">
<div class="placejs explore explore-main">
<a href="#" id="js-feedback-btn" class="fixed-feedback-bn">Feedback</a>
<div id="container">

<div class="relative-hdr">
<header class="explore-hdr">
@if($message = Session::get('success'))
    <div class="alert alert-success">{{ $message }}</div>
@endif
    
<div class="hdr-wrapper">
        <h2 class="logo-cont">
			<a href="https://spadli.com/wp-content/uploads/2017/03/Spadli-logobeta-1.png" class="logo-wrapper">
				<span class="icon-cont icons-everplaces">
				    <span class="wrapper-hidden-text">Spadli</span>
				</span>
			</a>
		</h2>
        <ul class="right-nav">
            <li class="nav-el">
                <a class="login-btn transparent-btn" href="/">Home</a>
            </li>
            <li class="nav-el">
                <a class="login-btn transparent-btn" href="auth">Log in</a>
            </li>
            <li class="nav-el">
                <a id="js-signup-btn" class="signup-btn orange-btn" href="auth">Sign up</a>
            </li>
        </ul>
    </div>
</header>
</div>
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
                <span class="mbreak">Discover</span> Your <a class="cat-link" href="/sleep">Next Destination</a>, <a class="cat-link" href="/food">Flight</a>, <a class="cat-link" href="/food">Hotel</a>, <a class="cat-link" href="/food">Restaurant</a>, <a class="cat-link" href="/play">Store</a></div>
           <p style="color: #f5f7f7;margin-top: -21px;">Have your city, neighborhood and enterprises discovered so it results in a memorable trip for visitors. Let them discover you.” </p>    
		  		   <iframe scrolling="no" width="" height="215" frameborder="0" src="//www.travelpayouts.com/widgets/1c47fec03373ed0f7f93d34da4a92073.html?v=1848" style="width: 100%; background-color: #00b0dd;"></iframe>
	  <div class="el search-examples" style="margin-top: 8px;">
	      <span class="mbreak">
	          <strong>Popular Searches</strong>: <a href="#">Destination</a>, <a href="#">Top Picks Cities</a>,</span> <a href="#">Tours</a>, <a href="#">Travel Deals</a></div>
        </div>
    </div>
</div>
<!-- Featured Destinations================================================== -->
		<section class="featured-destinations">
			<div class="container">
				<div class="cards overlap ">
					<!-- Section Title -->
					<!-- Cards Row -->
				    <div class="row main-box-list">
                        <div class="col-md-3 col-sm-6 col-xs-12" style="max-height:342px;" data-id="0000">
							<article class="card">
								<div class="card-details card-setting">
										<i class="faa fa-exchange" aria-hidden="true"></i>
										<i class="fa fa-map-marker mapa"></i>
										<h4 class="card-title">
										    <a href="#">Tofinio Canada</a>
										</h4>
								</div>
								<a href="#" class="featured-image" style="background-image: url({{ asset('assets/images/2.png') }})">
									<div class="featured-img-inner"></div>
								</a>
								<div class="new show">
										<i class="fa fa-heart heart-unclicked" aria-hidden="true">0</i>														
										<i  style="color: white; float: right; margin-right: 5%; transform: rotate(90deg); font-size: 20px;" class="margin-i fa fa-ellipsis-v open-list" aria-hidden="true"></i>
								</div>								
								<div class="card-details card-details-bottom" style="margin-top: -1%;">
									<div class="meta-details clearfix">
										<ul class="hierarchy" style="margin-left: -10px;">
											<li class="symbol"><i class="fa fa-map-marker"></i></li>
											<li><a href="#">Oceania>canada</a></li>
											<div class="rating" style="float: right; margin-top: 0%; margin-left: -3%; padding: 0%; display: contents;">
												<input id="rating-4" type="radio" name="rating" value="4" checked />
												<label for="rating-4">
												    <i class="fas fa fa-star"></i>
												</label>
												<input id="rating-3" type="radio" name="rating" value="3"/>
												<label for="rating-3">
												    <i class="fas fa fa-star"></i>
												</label>
												<input id="rating-2" type="radio" name="rating" value="2"/>
												<label for="rating-2">
												    <i class="fas fa fa-star"></i>
												</label>
												<input id="rating-1" type="radio" name="rating" value="1"/>
												<label for="rating-1">
												    <i class="fas fa fa-star"></i>
												</label>
											</div>											
											</ul>
						            </div>
								</div>
								<div style="float: left;">
								<div class="share-list" style="margin-left: -13px; margin-top: -73%;">
									<div class="popup-content">
										<div class="box">
											<button class="close">x</button>  
												<i  style="margin-top: 2px; cursor: pointer; float: left; margin-left: 5px;" class="fa fa-share-alt social-share-list" aria-hidden="true">Share Post</i>
												<i  style="margin-top: 22px; float: left; margin-left: -40%; cursor: pointer;" class="fa fa-comment comment-popup" id="myBtn" aria-hidden="true">Comment here</i>
												<i  style="float: left; margin-left: -54%; cursor: pointer; margin-top: 44px;" class="fa fa-share social-share-list2"   aria-hidden="true"> Follow List</i>
												<i  style="margin-top: 66px; float: left; margin-left: -55%; cursor: pointer;" class="fa fa-link" aria-hidden="true"> Share Items </i>
												<i  style="float: left; margin-left: -55%; cursor: pointer; margin-top: 87px;" class="fa fa-heart" aria-hidden="true"> Add to Wishlist</i>
												<i  style="float: left; margin-left: -60%; cursor: pointer; margin-top: 111px;" class="fa fa-flag report-post" aria-hidden="true"> Report</i>
										</div>
									</div>
								</div>
								<div class="social-media">
									<div class="popup-content1">
										<div class="box1" id="m2">
											<button class="close">x</button>  
												<div class="sharethis-inline-share-buttons"></div>	
										</div>
									</div>
								</div>
			                    <div class="social-media-follow">
									<div class="popup-content2">
										<div class="box1" id="m2" style="margin-top: -93px;">
											<button class="close">x</button>  
												<div class="sharethis-inline-follow-buttons"></div>
										</div>
									</div>
								</div> 
								</div>
							</article>
							
                     </div>	


						<div class="col-md-3 col-sm-6 col-xs-12" style="max-height:342px;" data-id="0001">
							<article class="card">
								<div class="card-details card-setting">
										<i class="faa fa-exchange" aria-hidden="true"></i>
										<i class="fa fa-map-marker mapa"></i>
										<h4 class="card-title">
										    <a href="#">Tofinio Canada</a>
										</h4>
								</div>
								<a href="#" class="featured-image" style="background-image: url({{ asset('assets/images/2.png') }})">
									<div class="featured-img-inner">
									</div>
								</a>
							<div class="new show" style="margin-top: -17%;">
										<i class="fa fa-heart heart-unclicked" aria-hidden="true" style=" margin-top: 2%; margin-left: 2%; color: white; font-size: 14px;">1234</i>														
										<i  style="color: white; float: right; margin-right: 5%; transform: rotate(90deg); font-size: 20px;" class="margin-i fa fa-ellipsis-v open-list" aria-hidden="true"></i>
								</div>
								<div class="card-details card-details-bottom" style="margin-top: -7%;">
									<div class="meta-details clearfix">
										<ul class="hierarchy" style="padding-top: 0%; margin-top: -4%; margin-left: -10px; margin-bottom: -7%;">
										<img style="width: 18%; border-radius: 50%; height: 100%;" src="http://placehold.it/300x300" >
											</ul>
											<div>
											<p class="titlepersonal">Personal</p>
											<p class="catpersoanl categ-id">animal</p>
											</div>
						            </div>
								</div>
								<div style="float: left;">
								<div class="share-list" style="margin-left: -13px; margin-top: -73%;">
									<div class="popup-content">
										<div class="box">
											<button class="close">x</button>  
												<i  style="margin-top: 2px; cursor: pointer; float: left; margin-left: 5px;" class="fa fa-share-alt social-share-list" aria-hidden="true">Share Post</i>
												<i  style="margin-top: 22px; float: left; margin-left: -40%; cursor: pointer;" class="fa fa-comment comment-popup" id="myBtn" aria-hidden="true">Comment here</i>
												<i  style="float: left; margin-left: -54%; cursor: pointer; margin-top: 44px;" class="fa fa-share social-share-list2"   aria-hidden="true"> Follow List</i>
												<i  style="margin-top: 66px; float: left; margin-left: -55%; cursor: pointer;" class="fa fa-link" aria-hidden="true"> Share Items </i>
												<i  style="float: left; margin-left: -55%; cursor: pointer; margin-top: 87px;" class="fa fa-heart" aria-hidden="true"> Add to Wishlist</i>
												<i  style="float: left; margin-left: -60%; cursor: pointer; margin-top: 111px;" class="fa fa-flag report-post" aria-hidden="true"> Report</i>
										</div>
									</div>
								</div>
	
							 	<div class="social-media">
									<div class="popup-content1">
										<div class="box1" id="m2">
											<button class="close">x</button>  
												<div class="sharethis-inline-share-buttons"></div>	
										</div>
									</div>
								</div>								
			                    <div class="social-media-follow">
									<div class="popup-content2">
										<div class="box1" id="m2" style="margin-top: -93px;">
											<button class="close">x</button>  
												<div class="sharethis-inline-follow-buttons"></div>
										</div>
								</div>
								</div>  
								</div>
							</article>
						</div> 
                           @foreach($posts ?? '' as $post)
                            @if($post->listing_id == $personalListingId)
                                <div class="col-md-3 col-sm-6 col-xs-12" style="max-height:342px;" data-id="{{ $post->id }}">
                                    <article class="card">
                                        <div class="card-details card-setting">
                                            <i class="faa fa-exchange" aria-hidden="true"></i>
                                            <i class="fa fa-map-marker mapa"></i>
                                            <h4 class="card-title">
                                                <a href="{{ url('posts/detail/' . $post->id) }}">
                                                    {{ $post->city }} {{ $post->state }} {{ $post->country }}
                                                </a>
                                            </h4>
                                        </div>
                                        <a href="{{ url('posts/detail/' . $post->id) }}" class="featured-image" style="background-image: url({{ asset('uploads/' . $post->gallery) }})">
                                            <div class="featured-img-inner">
                                            </div>
                                        </a>
                                        <div class="new show" style="margin-top: -17%;">
                                            <i class="fa fa-heart heart-unclicked" aria-hidden="true" style=" margin-top: 2%; margin-left: 2%; color: white; font-size: 14px;">1234</i>														
                                            <i  style="color: white; float: right; margin-right: 5%; transform: rotate(90deg); font-size: 20px;" class="margin-i fa fa-ellipsis-v open-list" aria-hidden="true"></i>
                                        </div>
                                        <div class="card-details card-details-bottom" style="margin-top: -7%;">
                                            <div class="meta-details clearfix">
                                                <ul class="hierarchy" style="padding-top: 0%; margin-top: -4%; margin-left: -10px; margin-bottom: -7%;">
                                                    <img style="width: 18%; border-radius: 50%; height: 100%;" src="http://placehold.it/300x300" >
                                                </ul>
                                            <div>
                                            <p class="titlepersonal">Personal</p>
                                            <p class="catpersoanl categ-id">
                                                @foreach($post->categories as $item)
                                                    @if(!$loop->first), @endif {{ $item->name }}
                                                @endforeach</p>
                                        </div>
                                   <!--  </div>
                                </div> -->
                                        <div style="float: left;">
                                            <div class="share-list" style="margin-left: -13px; margin-top: -73%;">
                                                <div class="popup-content">
                                                    <div class="box">
                                                        <button class="close">x</button>  
                                                        <i  style="margin-top: 2px; cursor: pointer; float: left; margin-left: 5px;" class="fa fa-share-alt social-share-list" aria-hidden="true">Share Post</i>
                                                        <i  style="margin-top: 22px; float: left; margin-left: -40%; cursor: pointer;" class="fa fa-comment comment-popup" id="myBtn" aria-hidden="true">Comment here</i>
                                                        <i  style="float: left; margin-left: -54%; cursor: pointer; margin-top: 44px;" class="fa fa-share social-share-list2"   aria-hidden="true"> Follow List</i>
                                                        <i  style="margin-top: 66px; float: left; margin-left: -55%; cursor: pointer;" class="fa fa-link" aria-hidden="true"> Share Items </i>
                                                        <i  style="float: left; margin-left: -55%; cursor: pointer; margin-top: 87px;" class="fa fa-heart" aria-hidden="true"> Add to Wishlist</i>
                                                        <i  style="float: left; margin-left: -60%; cursor: pointer; margin-top: 111px;" class="fa fa-flag report-post" aria-hidden="true"> Report</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-media">
                                                <div class="popup-content1">
                                                    <div class="box1" id="m2">
                                                        <button class="close">x</button>  
                                                        <div class="sharethis-inline-share-buttons"></div>	
                                                    </div>
                                                </div>
                                            </div>								
                                            <div class="social-media-follow">
                                                <div class="popup-content2">
                                                    <div class="box1" id="m2" style="margin-top: -93px;">
                                                        <button class="close">x</button>  
                                                        <div class="sharethis-inline-follow-buttons"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div> 
                            @elseif($post->listing_id == $publicityListingId)
                                <div class="col-md-3 col-sm-6 col-xs-12" style="max-height:342px;" data-id="{{ $post->id }}">
                                    <article class="card">
                                        <div class="card-details card-setting">
                                            <i class="faa fa-exchange" aria-hidden="true"></i>
                                            <i class="fa fa-map-marker mapa"></i>
                                            <h4 class="card-title">
                                                <a href="{{ url('posts/detail/' . $post->id) }}">
                                                    {{ $post->city }} {{ $post->state }} {{ $post->country }}
                                                </a>
                                            </h4>
                                        </div>
                                        <a href="{{ url('posts/detail/' . $post->id) }}" class="featured-image post-design" style="background-image: url({{ asset('uploads/' . $post->gallery) }}) ">
                                            <div class="featured-img-inner"></div>
                                        </a>
                                        <div class="new show">
                                            <i class="fa fa-heart heart-unclicked" aria-hidden="true" style=" margin-top: 2%; margin-left: 2%; color: white; font-size: 14px;">1234</i>														
                                            <i  style="color: white; float: right; margin-right: 5%; transform: rotate(90deg); font-size: 20px;" class="margin-i fa fa-ellipsis-v open-list" aria-hidden="true"></i>
                                        </div>								
                                        <div class="card-details card-details-bottom post-design-lower">
                                            <div class="meta-details clearfix">
                                                <ul class="hierarchy" style="padding-top: 0%; margin-top: 0%; margin-left: -11px; margin-bottom: -22%;">
                            
                                                <img style="width: 18%; border-radius: 50%; height: 100%;" src="http://placehold.it/300x300" >
                                                    </ul>
                                                    <div class="title-color">
                                                    <p class="title-post eclips1"> {{ $post->title }}</p>
                                                    </div>
                                                    <div class="condition-id" style="margin-top: 20%">
                                                        <p class="nameid">Publicity</p>
                                                        
                                                        <p class="nameid categ-id" style=" margin-top: -5%; ">
                                                            <i class="fa fa-folder"></i>
                                                            @foreach($post->categories as $item)
                                                                @if(!$loop->first), @endif {{ $item->name }}
                                                            @endforeach</p>
                                                    </div>
                                                    
                                            </div>							
                                        </div>
                                        <div style="float: left;">
                                            <div class="share-list" style="margin-left: -13px; margin-top: -73%;">
                                                <div class="popup-content">
                                                    <div class="box">
                                                        <button class="close">x</button>  
                                                            <i  style="margin-top: 2px; cursor: pointer; float: left; margin-left: 5px;" class="fa fa-share-alt social-share-list" aria-hidden="true">Share Post</i>
                                                            <i  style="margin-top: 22px; float: left; margin-left: -40%; cursor: pointer;" class="fa fa-comment comment-popup" id="myBtn" aria-hidden="true">Comment here</i>
                                                            <i  style="float: left; margin-left: -54%; cursor: pointer; margin-top: 44px;" class="fa fa-share social-share-list2"   aria-hidden="true"> Follow List</i>
                                                            <i  style="margin-top: 66px; float: left; margin-left: -55%; cursor: pointer;" class="fa fa-link" aria-hidden="true"> Share Items </i>
                                                            <i  style="float: left; margin-left: -55%; cursor: pointer; margin-top: 87px;" class="fa fa-heart" aria-hidden="true"> Add to Wishlist</i>
                                                            <i  style="float: left; margin-left: -60%; cursor: pointer; margin-top: 111px;" class="fa fa-flag report-post" aria-hidden="true"> Report</i>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="social-media">
                                                <div class="popup-content1">
                                                    <div class="box1" id="m2">
                                                        <button class="close">x</button>  
                                                            <div class="sharethis-inline-share-buttons"></div>	
                                                    </div>
                                                </div>
                                            </div>								
                                            <div class="social-media-follow">
                                                <div class="popup-content2">
                                                    <div class="box1" id="m2" style="margin-top: -93px;">
                                                        <button class="close">x</button>  
                                                            <div class="sharethis-inline-follow-buttons"></div>
                                                    </div>
                                                </div>
                                            </div> 
                                    
                                        </div>
                                    </article>
                                </div>
                            @elseif($post->listing_id == $salesListingId)
                                <div class="col-md-3 col-sm-6 col-xs-12" style="max-height:342px;" data-id="{{ $post->id }}">
                                    <article class="card">
                                        <div class="card-details card-setting">
                                            <i class="faa fa-exchange" aria-hidden="true"></i>
                                            <i class="fa fa-map-marker mapa"></i>
                                            <h4 class="card-title">
                                                <a href="{{ url('posts/detail/' . $post->id) }}">
                                                    {{ $post->city }} {{ $post->state }} {{ $post->country }}
                                                </a>
                                            </h4>
                                        </div>
                                        <a href="{{ url('posts/detail/' . $post->id) }}" class="featured-image post-design" style="background-image: url({{ asset('uploads/' . $post->gallery) }})">
                                            <div class="featured-img-inner"></div>
                                        </a>
                                        <div class="new show">
                                            <i class="fa fa-heart heart-unclicked" aria-hidden="true" style=" margin-top: 2%; margin-left: 2%; color: white; font-size: 14px;">1234</i>														
                                            <i  style="color: white; float: right; margin-right: 5%; transform: rotate(90deg); font-size: 20px;" class="margin-i fa fa-ellipsis-v open-list" aria-hidden="true"></i>
                                        </div>								
                                        <div class="card-details card-details-bottom post-design-lower">
                                            <div class="meta-details clearfix">
                                                <ul class="hierarchy" style="padding-top: 0%; margin-top: 0%; margin-left: -11px; margin-bottom: -22%;">
                            
                                                <img style="width: 18%; border-radius: 50%; height: 100%;" src="http://placehold.it/300x300" >
                                                    </ul>
                                                    <div class="title-color">
                                                    <p class="title-post eclips1"> {{ $post->title }}</p>
                                                    </div>
                                                    <div style="margin-top: 9%; font-size: small;">
                                                        <p class="nameid">sale-AD</p>
                                                        
                                                        <p class="nameid categ-id"><i class="fa fa-folder"></i
                                                        >@foreach($post->categories as $item)
                                                                @if(!$loop->first), @endif {{ $item->name }}
                                                            @endforeach</p>
                                                    </div>
                                                    <div class="condition-id">
                                                        <p class="nameid">{{ $post->conditions }}</p>
                                                        <p class="nameid categ-id eclips1" style="font-size: large; margin-top: -7%; margin-left: 81%;">
                                                            {{ $post->price }} {{ $post->currency }}
                                                        </p>
                                                    </div>
                                            </div>							
                                        </div>
                                        <div style="float: left;">
                                            <div class="share-list" style="margin-left: -13px; margin-top: -73%;">
                                                <div class="popup-content">
                                                    <div class="box">
                                                        <button class="close">x</button>  
                                                            <i  style="margin-top: 2px; cursor: pointer; float: left; margin-left: 5px;" class="fa fa-share-alt social-share-list" aria-hidden="true">Share Post</i>
                                                            <i  style="margin-top: 22px; float: left; margin-left: -40%; cursor: pointer;" class="fa fa-comment comment-popup" id="myBtn" aria-hidden="true">Comment here</i>
                                                            <i  style="float: left; margin-left: -54%; cursor: pointer; margin-top: 44px;" class="fa fa-share social-share-list2"   aria-hidden="true"> Follow List</i>
                                                            <i  style="margin-top: 66px; float: left; margin-left: -55%; cursor: pointer;" class="fa fa-link" aria-hidden="true"> Share Items </i>
                                                            <i  style="float: left; margin-left: -55%; cursor: pointer; margin-top: 87px;" class="fa fa-heart" aria-hidden="true"> Add to Wishlist</i>
                                                            <i  style="float: left; margin-left: -60%; cursor: pointer; margin-top: 111px;" class="fa fa-flag report-post" aria-hidden="true"> Report</i>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="social-media">
                                                <div class="popup-content1">
                                                    <div class="box1" id="m2">
                                                        <button class="close">x</button>  
                                                            <div class="sharethis-inline-share-buttons"></div>	
                                                    </div>
                                                </div>
                                            </div>								
                                            <div class="social-media-follow">
                                                <div class="popup-content2">
                                                    <div class="box1" id="m2" style="margin-top: -93px;">
                                                        <button class="close">x</button>  
                                                            <div class="sharethis-inline-follow-buttons"></div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </article>
                                </div>
                            @elseif($post->listing_id == $eventsListingId)
                                <div class="col-md-3 col-sm-6 col-xs-12" style="max-height:342px;" data-id="{{ $post->id }}">
                                    <article class="card">
                                        <div class="card-details card-setting">
                                            <i class="faa fa-exchange" aria-hidden="true"></i>
                                            <i class="fa fa-map-marker mapa"></i>
                                            <h4 class="card-title">
                                                <a href="{{ url('posts/detail/' . $post->id) }}">
                                                    {{ $post->city }} {{ $post->state }} {{ $post->country }}
                                                </a>
                                            </h4>
                                        </div>
                                        <a href="{{ url('posts/detail/' . $post->id) }}" class="featured-image post-design" style="background-image: url({{ asset('uploads/' . $post->gallery) }}) ">
                                            <div class="featured-img-inner"></div>
                                        </a>
                                        <div class="new show">
                                            <i class="fa fa-heart heart-unclicked" aria-hidden="true" style=" margin-top: 2%; margin-left: 2%; color: white; font-size: 14px;">1234</i>														
                                            <i  style="color: white; float: right; margin-right: 5%; transform: rotate(90deg); font-size: 20px;" class="margin-i fa fa-ellipsis-v open-list" aria-hidden="true"></i>
                                        </div>
                                    
                                        <div class="card-details card-details-bottom post-design-lower" >
                                            <div class="meta-details clearfix">
                                                <ul class="hierarchy" style="padding-top: 0%; margin-top: 0%; margin-left: -11px; margin-bottom: -22%;">
                            
                                                <img style="width: 18%; border-radius: 50%; height: 100%;" src="http://placehold.it/300x300" >
                                                    </ul>
                                                    <div class="title-color">
                                                    <p class="title-post eclips1"> {{ $post->title }}</p>
                                                    </div>
                                                    <div style="margin-top: 9%; font-size: small;">
                                                        <p class="nameid">Events</p>
                                                        
                                                        <p class="nameid categ-id"><i class="fa fa-folder"></i>
                                                        @foreach($post->categories as $item)
                                                                @if(!$loop->first), @endif {{ $item->name }}
                                                            @endforeach</p>
                                                    </div>
                                                    <div class="condition-id">
                                                        <p class="nameid">{{ \Carbon\Carbon::parse($post->posted_at)->toDateString() }}</p>
                                                        <p class="nameid categ-id" style="margin-top: -5%;">{{ \Carbon\Carbon::parse($post->posted_at)->toTimeString() }}</p>
                                                    </div>
                                            </div>							
                                        </div>
                                        <div style="float: left;">
                                            <div class="share-list" style="margin-left: -13px; margin-top: -73%;">
                                                <div class="popup-content">
                                                    <div class="box">
                                                        <button class="close">x</button>  
                                                            <i  style="margin-top: 2px; cursor: pointer; float: left; margin-left: 5px;" class="fa fa-share-alt social-share-list" aria-hidden="true">Share Post</i>
                                                            <i  style="margin-top: 22px; float: left; margin-left: -40%; cursor: pointer;" class="fa fa-comment comment-popup" id="myBtn" aria-hidden="true">Comment here</i>
                                                            <i  style="float: left; margin-left: -54%; cursor: pointer; margin-top: 44px;" class="fa fa-share social-share-list2"   aria-hidden="true"> Follow List</i>
                                                            <i  style="margin-top: 66px; float: left; margin-left: -55%; cursor: pointer;" class="fa fa-link" aria-hidden="true"> Share Items </i>
                                                            <i  style="float: left; margin-left: -55%; cursor: pointer; margin-top: 87px;" class="fa fa-heart" aria-hidden="true"> Add to Wishlist</i>
                                                            <i  style="float: left; margin-left: -60%; cursor: pointer; margin-top: 111px;" class="fa fa-flag report-post" aria-hidden="true"> Report</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-media">
                                                <div class="popup-content1">
                                                    <div class="box1" id="m2">
                                                        <button class="close">x</button>  
                                                            <div class="sharethis-inline-share-buttons">
                                                            </div>	
                                                    </div>
                                                </div>
                                            </div>	

                                            <div class="social-media-follow">
                                                <div class="popup-content2">
                                                    <div class="box1" id="m2" style="margin-top: -93px;">
                                                        <button class="close">x</button>  
                                                            <div class="sharethis-inline-follow-buttons"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>                                        
                            @endif
                        @endforeach
		<!-- Home Page Search Section
		================================================== -->
	<div id="myModal" class="modal fade" role="dialog" style="z-index: 100000;">
  <!-- Modal content -->
		<div class="modal-content" style="float:left;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="image-box" style="float:left;">
						<a href="https://flights.spadli.com/flights/BNE0708SYD28081" target="_blank" style="width:100%;">
							<img src="https://myzone-e3qixj3gbfacwv.netdna-ssl.com/wp-content/uploads/2017/09/2-2-800x600.png" style="width:100%;">
                        </a>
					</div>
                <div class="comment-box-list" style="float:left;">
                    <div class="card paper">
                        <summary style="padding:1em;">
                            <span class="comment-model-count">0 </span>comment
                            <li class="list-group-item comment-list-clone hidden" style="border: none !important; border-radius: 0 !important;">
                                <span class="circle" style="position: absolute; width: 42px; height: 42px; overflow: hidden; left: 15px; display: inline-block; vertical-align: middle; border-radius: 50%;">
									<img src="https://myzone-e3qixj3gbfacwv.netdna-ssl.com/wp-content/uploads/avatars/1/5a9998e6a76c7-bpfull.png" class="avatar user-1-avatar avatar-96 photo" width="96" height="96" alt="Profile photo of admin">
                                </span>
                                <span class="title" style="display: inline-block; margin-left: 4em;">
									<a href="https://www.spadli.com/members/admin/" style="font-size: 14px !important; font-weight: 500 !important; color: rgba(0,0,0,.8);text-decoration: none !important;">User</a> 
									<time class="comment-box-time" style="font-size: 12px; color: rgba(0,0,0,.5)!important; font-weight: 400; margin-left: 6px;"> Dec 11 2019  02:12 AM</time>
									<p class="comment-box-text" style="margin-bottom: 0; white-space: normal; color: rgba(0,0,0,.8); font-size: 14px; margin-top: 0.215em;">hi test </p>
                                </span>
                            </li>
                            <div class="comment-box-data">
                                
                            </div>
						</summary>					
									<form style="position: fixed;bottom: 0;margin-bottom: 10px;float: left;">
                                        <fieldset class="form-group">
                                            <input class="form-control comment-input" id="comment-data" placeholder="Add something about it" name="comment-data" value="">
                                            <button type="button" style="float: right;" class="add-comment-btn btn-sm btn-success">Add Comment</button>
                                        </fieldset>
                                            
                                    </form>	
					</div> 
                </div>
        </div>
    </div>	
</div>
</div>
<!-- Folow us -->
<!--  posts popup  -->
<!-- Emotes -->
  <div class="sharethis-inline-reaction-buttons"></div>
<!--
<h2>Popup</h2>
<div class="popup2" onclick="myFunction()">Click me to toggle the popup!
  <span class="popuptext" id="myPopup">A Simple Popup!</span>
</div>

	-->
	
	<!--
	<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>
	
	-->
	<div id="div-exchange-model" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" style="z-index: 10000;overflow-x: hidden;overflow-y: auto;">
	    <div class="modal-content" style="width: 40%; margin: 5% auto;">
	        <span class="close">x</span>
	        <section class="featured-destinations" style="background-color:#ffffff;">
	            <div class="cards overlap">
	                
	            </div>
	        </section>
	   </div>
	</div>
	
<div id="report-post-modal" class="modal" tabindex="-1" role="dialog" style="z-index:1000000">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Report Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="email" required value="" placeholder="Enter Your Email"/>
        <input type="text" required value="" placeholder="Enter Your Reason"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Report Post</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
		<!-- Footer
		================================================== -->
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
							
							<span style="color:#999; font-size: 13px;">&copy; 2017 Spadli | Terms of Use and Privacy Policy.</span>
						</div>
					</div>
				</div>
			</section>
		</footer>


<script src="https://maps.googleapis.com/maps/api/js?v=3.16&language=en"></script>
<script src="https://dj1ec046erlmc.cloudfront.net/j/lib/json-template.96bdeede1f07.js"></script>
<script src="https://dj1ec046erlmc.cloudfront.net/j/lib.0fa2a331300c.js" charset="utf-8"></script>
<script src="https://dj1ec046erlmc.cloudfront.net/j/lib/apprise.a567cf97d94d.js"></script>
<script>
$(document).ready(function(){
    $(".add-comment-btn").on("click",function(){
        if($("#comment-data").val()){
            $.ajax({
                url: "save_comment.php",
                dataType : "json",
                data: {"comment": $("#comment-data").val()},
                type: 'POST',
                success: function(result){
                    if(result.success){
                        var commentBox = $(".comment-list-clone").clone();
                        commentBox.removeClass("hidden");
                        commentBox.removeClass("comment-list-clone");
                        commentBox.find(".comment-box-text").text($("#comment-data").val())
                        commentBox.find(".comment-box-time").text(result.time);
                        console.log(commentBox);
                        $(".comment-box-data").prepend(commentBox);
                    }
                }
            });
        }
    });  
    
    $(".fa-exchange").on("click", function() {
        var clicked_one = $(this).parent().parent().parent().attr("data-id");
        var data_box = '';
        var first_div = '';
        $(".main-box-list").find(".col-md-3").each(function() {
            var clone = $(this).clone();
            clone.find(".fa-exchange").remove();
            if (clicked_one == $(this).attr("data-id")) {
                first_div = clone.html();
            } else {
                data_box += clone.html();
            }
        });
        $("#div-exchange-model").find(".overlap").html(first_div + data_box);
        $("#div-exchange-model").addClass("in");
        $("#div-exchange-model").addClass("show-modal");
        $(".home").addClass("overflow-hidden");
        $("#div-exchange-model").show("modal");
        $("#div-exchange-model").css("display","block");
    });
    $(".comment-popup").on("click",function(){
        var bg = $(this).parent().parent().parent().parent().parent().find(".featured-image").css('background-image');
        bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
        $("#myModal .image-box img").attr("src",bg);
        $("#myModal").modal();
    });
    $(".report-post").on("click",function(){
       $("#report-post-modal").modal(); 
    });
});
/*
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
{
  if (event.target == modal) 
  {
    modal.style.display = "none";
  }
}
*/
    (function () 
    {
        var everplaces = {};
        everplaces.me = eval();
        everplaces.user = everplaces.me;
        everplaces.collections = eval();
        everplaces.categories = eval();
        if(everplaces.me !== undefined && everplaces.user.username === everplaces.me.username){
            everplaces._private = true;
        }
        else
        {
            everplaces._private = false;
        }

        window.everplaces = everplaces;
    }());

    window.options = {
        more_pages: true,
        el: $("#explore-con-close"),
    }
    $().ready(function () 
    {

        /*Feature bg slides*/
        var z = 700;
        var looptimemsecs = 5000;
        var fademsecs = 800;
        function changebg() 
        {
            var s = $("#bgslides ul li").eq(0);
            
            $('#bgslides ul li').eq(1).css('display', 'list-item').css('#', );
            $('#bgslides ul li').eq(0).fadeOut(fademsecs, function () {
                setTimeout(changebg, looptimemsecs);
                s.css('display', 'none');
            });
            $("#bgslides ul").append(s);
        }
        setTimeout(changebg, looptimemsecs);
    });
</script>
<script src="https://dj1ec046erlmc.cloudfront.net/j/app/entries/explore.lib.dcd9d760f4de.js"></script>
<script src="https://dj1ec046erlmc.cloudfront.net/j/forms.3e9716f6dc3c.js"></script>
<script src="https://dj1ec046erlmc.cloudfront.net/j/m.db51ff907123.js"></script>
<script src="https://dj1ec046erlmc.cloudfront.net/j/app/entries/places_global.lib.2d0aa2519ff4.js"></script>
<script src="https://dj1ec046erlmc.cloudfront.net/j/app/entries/friends_global.lib.58d637be7c6d.js"></script>

<script type="text/javascript">
    var analytics_url = ''
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-21691368-8']);
    _gaq.push(['_setDomainName', 'everplaces.com']);
    _gaq.push(['_setCustomVar', 1, 'User Type', 'Visitor', 2]);
    if(document.getElementById("js-hotel-referral")!=null)
    {
        _gaq.push(['_setCustomVar', 2, 'Referral page', 'Hotel referral', 3]);
    }
    if (analytics_url) 
    {
        _gaq.push(['_trackPageview', analytics_url]);
    } else 
    {
        _gaq.push(['_trackPageview']);
    };
    (function() 
    {
        var ga = document.createElement('script');
        ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<script>
$(document).ready(function()
{
    $(".heart-unclicked").on("click",function(){
        if($(this).hasClass("heart-clicked")){
            $(this).removeClass("heart-clicked");
            $(this).text(parseInt($(this).text()) - 1);
        }else{
            $(this).addClass("heart-clicked");
            $(this).text(parseInt($(this).text()) + 1);
        }
    });
  $(".open-list").on("click",function()
  {
     if($(this).parent().parent().find(".share-list .popup-content").css("visibility") == "hidden"){
        $(this).parent().parent().find(".share-list .popup-content").css("visibility","visible");      
     }else{
        $(this).parent().parent().find(".share-list .popup-content").css("visibility","hidden"); 
     }
  });
  $(".social-share-list").on("click",function()
  {
	$(this).parent().parent().css("visibility","hidden");
	$(this).parent().parent().parent().parent().find(".social-media .popup-content1").css("visibility","visible");
  });
  $(".social-share-list2").on("click",function()
  {
	$(this).parent().parent().css("visibility","hidden");
	$(this).parent().parent().parent().parent().find(".social-media-follow  .popup-content2" ).css("visibility","visible");
  });
  $(".like-list").on("click",function()
  {
	$(this).parent().parent().css("visibility","hidden");
	$(this).parent().parent().parent().parent().find(".media-like .media-popup").css("visibility","visible");
  });
  $(".report").on("click",function()
  {
	$(this).parent().parent().css("visibility","hidden");
	$(this).parent().parent().parent().parent().find(".report-content .report1").css("visibility","visible");
  });
   $(".close").on("click",function()
   {
		$(this).parent().parent().css("visibility","hidden");
	});
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e)
    {
      if (e < onStar) 
      {
        $(this).addClass('hover');
      }
      else 
      {
        $(this).removeClass('hover');
      }
    });
  }).on('mouseout', function()
  {
    $(this).parent().children('li.star').each(function(e)
    {
      $(this).removeClass('hover');
    });
  });
                            /* 2. Action to perform on click */
  $('#stars li').on('click', function()
  {
    var onStar = parseInt($(this).data('value'), 10); 
    // The star currently selected
    var stars = $(this).parent().children('li.star');
    for (i = 0; i < stars.length; i++) 
    {
      $(stars[i]).removeClass('selected');
    }
    for (i = 0; i < onStar; i++) 
    {
      $(stars[i]).addClass('selected');
    }
    
                    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) 
    {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else 
    {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
  });
  
});
function responseMessage(msg) 
{
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
</script>
<script>
function myFunction() 
{
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5dea9980b027a300123134f9&product=inline-share-buttons" async="async">
</script>
</body>
</html> 
</div>