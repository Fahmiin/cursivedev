@extends('layouts.app')

@section('content')
	<section class="hide-on-med-and-down">
		<div id="overlay"></div>

		<ul class="sidenav sidenav-fixed grey darken-4 hide-on-med-and-down">
			<li class="black social">
				<img src="img/TheCursiveDev.png" class="brand-logo">
				<p class="white-text center-align">
					<a href="https://www.facebook.com/cursivedev/"><i class="fab fa-facebook-square fa-3x"></i></a>
					<a href="https://www.instagram.com/cursivedev/?hl=en"><i class="fab fa-instagram fa-3x"></i></a>
					<a href="#"><i class="fab fa-linkedin fa-3x"></i></a>
				</p>
			</li>
			<li class="link"><a href="/" class="teal-text text-accent-2"><i class="material-icons left teal-text text-accent-2">arrow_back</i>Back</a></li>
			<br>
			<li><a href="http://4districtconnect.ml" class="white-text"><i class="material-icons left white-text">web</i>Visit site</a></li>
			<li><a href="#" class="white-text"><i class="material-icons left white-text">show_chart</i>Status: WIP</a></li>
			<li><a href="#" class="white-text"><i class="material-icons left white-text">language</i>Tech: Laravel</a></li>
		</ul>

		<div class="row">
			<div class="col m3"></div>
			<div class="col m9">
				<h4 class="center white-text section">A platform for raising mental awareness, <span class="teal-text text-accent-2">4DistrictConnect</span></h4>
				<div class="slider">
					<ul class="slides">
						<li>
							<img src="{{asset('img/4district/4district_1.jpg')}}">
						</li>
						<li>
							<img src="{{asset('img/4district/4district_2.jpg')}}">
							<div class="caption left-align">
								<h3 class="white-text position1">Scroll through different posts</h3>
							</div>
						</li>
						<li>
							<img src="{{asset('img/4district/4district_3.jpg')}}">
							<div class="caption left-align">
								<h3 class="white-text position1">Interactive profile page</h3>
							</div>
						</li>
						<li>
							<img src="{{asset('img/4district/4district_4.jpg')}}">
							<div class="caption center-align">
								<h3 class="white-text position1">Ask our admin</h3>
							</div>
						</li>
						<li>
							<img src="{{asset('img/4district/4district_5.jpg')}}">
							<div class="caption center-align">
								<h3 class="white-text">Full control Admin panel</h3>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<footer class="white-text grey darken-1 center-align">
			<h6>TheCursiveDeveloper &copy; rockin' it since 2018</h6>
		</footer>
	</section>

	<section class="hide-on-large-only">
		<div class="navbar-fixed">
			<nav class="black">
				<div class="nav-wrapper">
					<ul>
						<li><a href="/" class="teal-text text-accent-2"><i class="material-icons left teal-text text-accent-2">arrow_back</i>Back</a></li>
						<li><a href="#" class="white-text"><i class="material-icons left white-text">web</i>Visit site</a></li>
						<li class="right"><a class="dropdown-trigger" href="#" data-target="dropdown1"><i class="material-icons">menu</i></a></li>
					</ul>
				</div>
		    </nav>
		</div>
		<ul id='dropdown1' class='dropdown-content'>
			<li><a href="#" class="black-text"><i class="material-icons left black-text">show_chart</i>Status: WIP</a></li>
			<li><a href="#" class="black-text"><i class="material-icons left black-text">language</i>Tech: Laravel</a></li>
		</ul>

		<div class="center-align smallShowcase">
			<img src="{{asset('img/TheCursiveDev.png')}}">
		</div>
		
		<div class="show">
			<h6 class="center white-text section grey darken-2">A platform for raising mental awareness, <span class="teal-text text-accent-2">4DistrictConnect</span></h6>
			<div class="slider smallSlider">
				<ul class="slides smallSlides">
					<li>
						<img src="{{asset('img/4district/4district_1.jpg')}}">
					</li>
					<li>
						<img src="{{asset('img/4district/4district_2.jpg')}}">
						<div class="caption left-align">
							<p class="position3">Scroll through different posts</p>
						</div>
					</li>
					<li>
						<img src="{{asset('img/4district/4district_3.jpg')}}">
						<div class="caption left-align">
							<p class="position3">Interactive profile page</p>
						</div>
					</li>
					<li>
						<img src="{{asset('img/4district/4district_4.jpg')}}">
						<div class="caption left-align">
							<p class="position3">Ask our admin</p>
						</div>
					</li>
					<li>
						<img src="{{asset('img/4district/4district_5.jpg')}}">
						<div class="caption left-align">
							<p>Full control Admin panel</p>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<footer class="white-text grey darken-1 center-align">
			<h6>TheCursiveDeveloper &copy; 2018</h6>
		</footer>
	</section>
@endsection