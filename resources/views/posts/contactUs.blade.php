@extends('partials.layout')

@section('title')

@section('body-class', 'contact Us')

@section('content')


<section class="hero large-hero" style="background-image:url(assets/images/hero-2.jpg);">
			<div class="bg-overlay">
				<div class="container">
					<div class="intro-wrap">
						<h1 class="intro-title hidden">Contact Us</h1>
					</div>
				</div>
			</div>
		</section>


		<!-- Main Section
		================================================== -->

		<section class="main container">
			<div class="row">

				<h3 class="hidden">Contact Details</h3>

				<div class="col-lg-8 col-lg-offset-2">
					<article id="post-333" class="post-333 page type-page status-publish has-post-thumbnail hentry">
						<div class="entry-content">
							<div style="text-align:center">
								<h2>Get in touch with us.</h2>
								<p class="lead">Looking for something or have destination suggestions?
									<br>Tell us about it!</p>
								<div class="row">
									<ul class="list-inline">
										<li><a href="https://www.facebook.com/pages/Parallelus/197911100259679" target="_blank" class="text-muted"><i class="fa fa-facebook fa-fw fa-2x"></i></a></li>
										<li><a href="https://plus.google.com/u/0/b/106678036607447578802/106678036607447578802/posts" target="_blank" class="text-muted"><i class="fa fa-google-plus fa-fw fa-2x"></i></a></li>
										<li><a href="https://twitter.com/parallelus" target="_blank" class="text-muted"><i class="fa fa-twitter fa-fw fa-2x"></i></a></li>
										<li><a href="#" class="text-muted"><i class="fa fa-instagram fa-fw fa-2x"></i></a></li>
									</ul>
								</div>
								<hr class="small">
								<div style="width: 600px; text-align: left; margin: 0 auto; max-width: 100%">
									<form enctype="multipart/form-data" method="post" action="{{url('send')}}">
									 @csrf
                                    	<p>Fields marked with an <span class="text-warning">*</span> are required</p>

										<div class="form-group">
											<input id="name_field" type="text" placeholder="Name *" class="form-control"name="name" >
											<label for="name_field">Please enter your name.</label>
										</div>
										<div class="form-group">
											<input id="email_field" type="text" placeholder="Email *" class="form-control" name="email">
											<label for="email_field">Please enter your email address.</label>
										</div>
										<div class="form-group" >
											<textarea placeholder="Message *" id="comment_field" class="form-control" rows="3" name="message"></textarea>
											<label for="comment_field">Please enter your email address.</label>
										</div>

										<input type="submit" class="display-block" style="margin: 0 auto;" value="Send Message">
									</form>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>



@stop