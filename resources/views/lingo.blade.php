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
			<li class="link"><a href="/" class="orange-text text-accent-2"><i class="material-icons left orange-text text-accent-2">arrow_back</i>Back</a></li>
			<br>
			<li><a href="http://lingo.ml" class="white-text"><i class="material-icons left white-text">web</i>Visit site</a></li>
			<li><a href="#" class="white-text"><i class="material-icons left white-text">show_chart</i>Status: WIP</a></li>
			<li><a href="#" class="white-text"><i class="material-icons left white-text">language</i>Tech: Laravel</a></li>
		</ul>

		<div class="row">
			<div class="col m3"></div>
			<div class="col m9">
				<h4 class="center white-text section">A social media for freelancers, <span class="orange-text text-accent-2">Lingo</span></h4>
				<div class="slider">
					<ul class="slides">
						<li>
							<img src="{{asset('img/lingo/Lingo_1.jpg')}}">
						</li>
						<li>
							<img src="{{asset('img/lingo/Lingo_2.jpg')}}">
							<div class="caption left-align">
								<h3 class="black-text position1">Sleek and famliar design</h3>
							</div>
						</li>
						<li>
							<img src="{{asset('img/lingo/Lingo_3.jpg')}}">
							<div class="caption right-align">
								<h3 class="black-text">Update your profile</h3>
							</div>
						</li>
						<li>
							<img src="{{asset('img/lingo/Lingo_4.jpg')}}">
							<div class="caption left-align">
								<h3 class="black-text position2">Keep up to date with your contacts</h3>
							</div>
						</li>
						<li>
							<img src="{{asset('img/lingo/Lingo_5.jpg')}}">
							<div class="caption left-align">
								<h3 class="black-text position1">Choose from a variety of tags</h3>
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
						<li><a href="/" class="orange-text text-accent-2"><i class="material-icons left orange-text text-accent-2">arrow_back</i>Back</a></li>
						<li><a href="http://lingo.ml" class="white-text"><i class="material-icons left white-text">web</i>Visit site</a></li>
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
			<h6 class="center white-text section grey darken-2">A social media for freelancers, <span class="orange-text text-accent-2">Lingo</span></h6>
			<div class="slider smallSlider">
				<ul class="slides smallSlides">
					<li>
						<img src="{{asset('img/lingo/Lingo_1.jpg')}}">
					</li>
					<li>
						<img src="{{asset('img/lingo/Lingo_2.jpg')}}">
						<div class="caption left-align">
							<p class="black-text position3">Sleek and famliar design</p>
						</div>
					</li>
					<li>
						<img src="{{asset('img/lingo/Lingo_3.jpg')}}">
						<div class="caption right-align">
							<p class="black-text">Update your profile</p>
						</div>
					</li>
					<li>
						<img src="{{asset('img/lingo/Lingo_4.jpg')}}">
						<div class="caption left-align">
							<p class="black-text position3">Keep up to date with your contacts</p>
						</div>
					</li>
					<li>
						<img src="{{asset('img/lingo/Lingo_5.jpg')}}">
						<div class="caption left-align">
							<p class="black-text position3">Choose from a variety of tags</p>
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