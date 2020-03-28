<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index,follow" />
		<title>spadli | Login</title>

			<!-- Stylesheets
			================================================= -->
		<link rel="stylesheet" href="profiledesign/bootstrap.min.css" />
		<link rel="stylesheet" href="profiledesign/style.css" />
		<link rel="stylesheet" href="profiledesign/ionicons.min.css" />
		<link rel="stylesheet" href="profiledesign/font-awesome.min.css" />
				<!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="img/Spadli-logobeta.png"/>
        <style>
            .error {
                color: orangered;
                font-style: italic;
            }
        </style>
	</head>
	<body>

		<!-- Header
		================================================= -->
		
		<!--Header End-->
    
		<!-- Landing Page Contents
		================================================= -->
		<div id="lp-register">
			<div class="container wrapper">
				<div class="row">
					<div class="col-sm-5">
						<div class="intro-texts">
							<h1 class="text-white">Make Cool Friends !!!</h1>
                            <p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
                            <button class="btn btn-primary">Learn More</button>
                        </div>
					</div>
                    <div class="col-sm-6 col-sm-offset-1">
                        <div class="reg-form-container"> 
                        
                        <!-- Register/Login Tabs-->
                        <div class="reg-options">
                            <ul class="nav nav-tabs">
                            <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                            <li><a href="#login" data-toggle="tab">Login</a></li>
                            </ul><!--Tabs End-->
                        </div>
                        
                        <!--Registration Form Contents-->
                        <div class="tab-content">
                            <div class="tab-pane @if(Request::get('page') == 'register')) active @endif" id="register">
                            
                                <img src="assets/images/Spadli-logobeta-1.png" alt="Avatar" class="avatar">
                                <!--Register Form-->
                                @if ($message = Session::get('success')) 
                                    <div style="margin-top: 5%" class="alert alert-success">{{ $message }}</div>   
                                @endif
                                
                                @if ($message = Session::get('error')) 
                                    <div style="margin-top: 5%" class="alert alert-danger">{{ $message }}</div>   
                                @endif
                                
                                @if($errors->all()) 
                                    <div style="margin-top: 5%" class="alert alert-danger">
                                        <h4>Your form contains errors:</h4>
                                        <p>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </p>
                                    </div>
                                @endif 
                            
                                <form name="registration_form" id='registration_form' method="post" class="form-inline" action="{{ url('register') }}" style="margin-top: 5%;">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <label for="first_name" class="sr-only">First Name</label>
                                            <input id="first_name" class="form-control input-group-lg" type="text" name="first_name" title="Enter first name" placeholder="First name" required>
                                            @if($errors->has('firstname'))
                                                <div class="error">{{ $message }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="last_name" class="sr-only">Last Name</label>
                                            <input id="last_name"  class="form-control input-group-lg" type="text" name="last_name" title="Enter last name" placeholder="Last name" required>
                                            @if($errors->has('last_name'))
                                                <div class="error">{{ $message }}</div>
                                            @endif 
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xs-12">
                                                <label for="email" class="sr-only">Email</label>
                                                <input id="email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="Your Email" required>
                                                @if($errors->has('email'))
                                                    <div class="error">{{ $message }}</div>
                                                @endif 
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="form-group col-xs-12">
                                                <label for="password" class="sr-only">Password</label>
                                                <input id="password"  class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password" required>
                                                @if($errors->has('password'))
                                                    <div class="error">{{ $message }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                        <p class="birth"><strong>Date of Birth</strong></p>
                                        <div class="form-group col-sm-3 col-xs-6">
                                            <label for="month" class="sr-only"></label>
                                            <select class="form-control" id="day" name="day" required>
                                            <option value="Day" disabled selected>Day</option>
                                            @for($i=1; $i<=31; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                            </select>
                                            @if($errors->has('day'))
                                                <div class="error">{{ $message }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-sm-3 col-xs-6">
                                            <label for="month" class="sr-only"></label>
                                            <select class="form-control" id="month" name="month" required>
                                            <option value="month" disabled selected>Month</option>
                                            <option value="1">Jan</option>
                                            <option value="2">Feb</option>
                                            <option value="3">Mar</option>
                                            <option value="4">Apr</option>
                                            <option value="5">May</option>
                                            <option value="6">Jun</option>
                                            <option value="7">Jul</option>
                                            <option value="8">Aug</option>
                                            <option value="9">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                            </select>
                                            @if($errors->has('month'))
                                                <div class="error">{{ $message }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label for="year" class="sr-only"></label>
                                            <select class="form-control" id="year" name="year" required>
                                            <option value="year" disabled selected>Year</option>
                                            @for($i = date('Y'); $i >= 1940; $i--)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                            </select>
                                            @if($errors->has('year'))
                                                <div class="error">{{ $message }}</div>
                                            @endif
                                        </div>
                                        </div>
                                        <div class="form-group gender">
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="M" checked>Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="F">Female
                                        </label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xs-6">
                                                <label for="city" class="sr-only">City</label>
                                                <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter city" placeholder="Your city"/>
                                                @if($errors->has('city'))
                                                    <div class="error">{{ $message }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group col-xs-6">
                                                <label for="country" class="sr-only">Country</label>
                                                <select class="form-control" id="country" name="country">
                                                    <option value="country" disabled selected>Country</option>
                                                    @foreach($countries as $code => $name)
                                                        <option value="{{ $code }}">{{ $name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('city'))
                                                    <div class="error">{{ $message }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <p><a href="#">Already have an account?</a></p>
                                        <input style="border-radius: 5px;" class="btn btn-primary" type="submit" name="submit" text="Register Now" value="Register - now"></input>
                                    </div>                 
                                </form>
                            
                            <!--Register Now Form Ends-->
                            
                            <!--Registration Form Contents Ends-->
                            <!-- php login -->
                            
                            
                            <!-- php login  -->
                            <!--Login-->
                        <div class="tab-pane @if(Request::get('page') != 'register')) active @endif" id="login">
                            <img src="{{ asset('assets/images/Spadli-logobeta-1.png') }}" alt="Avatar" class="avatar">
                            @if ($message = Session::get('success')) 
                                <div style="margin-top: 5%" class="alert alert-success">{{ $message }}</div>   
                            @endif

                            @if ($message = Session::get('info')) 
                                <div style="margin-top: 5%" class="alert alert-info">{{ $message }}</div>   
                            @endif

                            @if ($message = Session::get('warning')) 
                                <div style="margin-top: 5%" class="alert alert-warning">{{ $message }}</div>   
                            @endif
                            
                            @if ($message = Session::get('error')) 
                                <div style="margin-top: 5%" class="alert alert-danger">{{ $message }}</div>   
                            @endif

                            @if($errors->all()) 
                                <div style="margin-top: 5%" class="alert alert-danger">
                                    <h4>Your form contains errors:</h4>
                                    <p>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </p>
                                </div>
                            @endif

                            <!--Login Form-->
                            <form name="Login_form" id='Login_form' style="margin-top: 5%;" action="{{ url('login') }}" method="POST"> 
                                @csrf
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="my-email" class="sr-only">Email</label>
                                        <input id="my-email" class="form-control input-group-lg" type="text" name="email" title="email" placeholder="Your Email" required >
                                        @if($errors->has('email'))
                                            <div class="error">{{ $message }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="my-password" class="sr-only">Password</label>
                                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password" required>
                                        @if($errors->has('password'))
                                            <div class="error">{{ $message }}</div>
                                        @endif
                                    </div>
                                </div>
                            <p><a href="#">Forgot Password?</a></p>
                            <input style="border-radius: 5px;" class="btn btn-primary" type="submit"   name="login" value="Login Now"/>
                            </form><!--Login Form Ends--> 
                            
                            </div>
                        
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-6">
                    
                        <!--Social Icons-->
                        <ul class="list-inline social-icons">
                        <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--preloader-->
    
        <!-- Scripts
        ================================================= -->
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('js/jquery.incremental-counter.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
	</body>
</html>
