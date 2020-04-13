@extends('partials.layout')

@section('title', $post->title)

@section('body-class', 'destination destination-sub-page')

@section('content')

<!-- Hero Section
		================================================== -->
		<section class="hero small-hero destination-header" style="background-image: url('assets/images/destination-6.jpg');">
		{{-- <section class="hero small-hero destination-header" style="background-image: url({{ asset('uploads/' . $post->gallery) }});"> --}}
			<div class="bg-overlay">
				<div class="container">
					<div class="intro-wrap">
						<h1 class="intro-title">Detail on {{ $post->title }}</h1>
						<!-- <div class="intro-text">
							<p>And more text below if you need it...</p>
						</div> -->
						<ul class="breadcrumbs">
							<!-- <li class="no-arrow"><a href="#" class="destination-context-menu"><i class="fa fa-ellipsis-v"></i><a></li> -->
							<li class="no-arrow"><i class="icon fa fa-map-marker"></i></li>
							<li><a href="destination-parent.html">{{ $post->city }}</a></li>
							<li><a href="destination-sub-page.html">{{ $post->state }}, {{ $post->country }}</a></li>
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
						<a href="javascript:void(0)" class="navbar-brand scrollTop"><i class="fa fa-fw fa-map-marker"></i> {{ $post->city }}, {{ $post->country }}</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-sub">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Sub Nav Links -->
					<nav class="navbar-collapse collapse" id="navbar-sub">
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
				<div class="row">
					<div class="col-sm-12 col-fixed-content">
						<div class="row">
							<div class="col-md-3 col-sm-4 page-navigation">
								<ul class="nav nav-stacked">
                                    @foreach($listings as $listing)
                                    <li class="{{ $listing->id == $post->listing_id ? 'active' : '' }}">
                                        <a href="{{ route('posts-by-listing', [$listing->slug]) }}">{{ ucfirst($listing->name) }}</a>
                                    </li>
                                    @endforeach
								</ul>
							</div>

							<div class="col-md-9 col-sm-8">
								<header class="page-header">
									<h1 class="page-title">{{ $post->title }}</h1>
									<p class="lead">{{ $post->short_description }}</p>
								</header>
								<p class="entry-thumbnail">
									<img style="height: 300px; width:100%;" src="{{ asset('uploads/' . $post->gallery) }}" class="" alt="">
								</p>
								<div class="entry-content" style="padding-top: 25px;">
									<p> {!! $post->description !!} </p>
                                </div>
                                

                                <div id="comments" class="comments-area">
							<header class="page-header">
								<h2 class="comments-title"> {{ $post->comments()->count() }} Comment(s)</h2> </header>
							<ol class="comment-list media-list">
                                @foreach($post->comments as $comment)
								<li class="comment even thread-even depth-1 parent">
									<article id="div-comment-6" class="comment-body media">
										<div class="media-body">
											<div class="media-body-wrap panel panel-default">
												<div class="panel-heading clearfix">
													{{-- <a class="pull-left" href="#"> <img src="assets/images/user-1.jpg" width="50" height="50" alt="Mason" class="avatar alignnone photo"> </a> --}}
													
													<h5 class="media-heading">
														<cite class="fn">{{ $comment->author }}</cite> <span class="says">says:</span>
													</h5>
													<div class="comment-meta">
														<a href="#">
															<time datetime="{{$comment->created_at}}">{{ $comment->created_at->toFormattedDateString() }}</time>
														</a>
													</div>
												</div>
												<div class="comment-content panel-body">
													<p>{{ $comment->message }}</p>
												</div>
											</div>
										</div>
									</article>
                                </li>
                                @endforeach
							</ol>
							<div id="respond" class="comment-respond">
								<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" href="#" style="display:none;">Cancel Reply</a></small></h3>
								<form id="commentform" method="POST" action="{{ route('post-comment', [$post->id]) }}" class="comment-form">
                                    @csrf
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
									<p class="comment-form-author">
										<label for="author">Name <span class="required">*</span></label>
										<input id="author" name="author" type="text" value="" size="30" aria-required="true" required="required">
									</p>
									<p class="comment-form-email">
										<label for="email">Email <span class="required">*</span></label>
										<input id="email" name="email" type="text" value="" size="30" aria-describedby="email-notes" aria-required="true" required="required">
									</p>
									<p class="comment-form-url">
										<label for="url">Website</label>
										<input id="url" name="url" type="text" value="" size="30">
									</p>
									<p>
										<textarea placeholder="Start typing..." id="comment" class="form-control" name="message" cols="45" rows="8" aria-required="true"></textarea>
									</p>
									<p class="form-submit">
										<input name="submit" type="submit" id="commentsubmit" class="submit" value="Post Comment">
										<input type="hidden" name="comment_post_ID" value="636" id="comment_post_ID">
										<input type="hidden" name="comment_parent" id="comment_parent" value="0">
									</p>
								</form>
							</div>
						</div>

							</div>
						</div>
					</div>

					<!-- ///////////////////// -->
					<!-- ////// SIDEBAR ////// -->
					<!-- ///////////////////// -->

					<div class="col-sm-12 col-fixed-sidebar">
						<div class="sidebar-padder">
							<aside id="text-2" class="widget widget_text">
								<div class="textwidget">
                                   {{--  <img style="height: 250px;" src="{{ asset('front/assets/images/sidebar-ad.jpg') }}" width="300" height="600" alt="my travel agency" title="Find out where you belong."> --}}
                                    <iframe width="300" height="250" src="https://www.youtube.com/embed/gyxYqEYgc3k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
							</aside>
							<aside id="nav_menu-5" class="widget widget_nav_menu">
								<h3 class="widget-title">Caterories</h3>
								<div class="menu-top-destinations-container">
									<ul id="menu-top-destinations" class="menu">
                                        @foreach($categories as $category)
                                        <li class="menu-item"><a href="{{ route('posts-by-category', [$category->slug]) }}">{{ ucfirst($category->name) }}</a></li>
                                        @endforeach
									</ul>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</section>


        <section class="narrow blog-posts-alt">
            <div class="title-row" style="padding-left: 10%;">
                <h3 class="title-entry">Posts</h3> 
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    @foreach($posts as $post2)
                        @if ($loop->iteration > 3) @break @endif
                        <article class="post">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="{{ route('post-detail', [$post2->id]) }}" rel="bookmark">
                                        <div class="entry-thumbnail card"> 
                                            <img style="width:600px; height:250px;" src="{{ asset('uploads/' . $post2->gallery) }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-8">
                                    <header class="entry-header"> <a href="{{ route('post-detail', [$post2->id]) }}" rel="bookmark"><h2 class="entry-title">{{ $post2->title }}</h2> </a>
                                        <div class="entry-meta"> <span class="icon-meta"> <span class="byline"> <i class="fa fa-user"></i> <span class="author vcard"><a href="#" title="Posts by Olivia" rel="author">{{ $post2->user->first_name }} {{ $post2->user->last_name }}</a></span> </span>
                                            </span> &nbsp; <span class="icon-meta"> <span class="posted-on"> <i class="fa fa-calendar"></i> <span class="meta-item">{{ $post2->posted_at ? \Carbon\Carbon::parse($post2->posted_at)->toFormattedDateString() : '' }}</span> </span>
                                            </span>
                                        </div>
                                    </header>
                                    <div class="entry-content">
                                        <p>{!! strlen($post2->description) < 250 ? $post2->description : (substr($post2->description, 0, 250) . '...') !!}</p> 
                                        <a href="{{ route('post-detail', [$post2->id])  }}" class="more-link btn btn-sm btn-primary">Continue reading <span class="meta-nav"> &nbsp; <i class="fa fa-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
		</section>

@stop
