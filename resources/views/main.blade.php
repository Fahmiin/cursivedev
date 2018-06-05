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
			<li class="link"><a href="#home" class="blue-text text-accent-2"><i class="material-icons left blue-text text-accent-2">home</i>Home</a></li>
			<li class="link"><a href="#services" class="teal-text text-accent-2"><i class="material-icons left teal-text text-accent-2">laptop</i>Services</a></li>
			<li class="link"><a href="#projects" class="yellow-text text-lighten-3"><i class="material-icons left yellow-text text-lighten-3">assignment</i>Projects</a></li>
			<li class="link"><a href="#contact" class="red-text text-accent-2"><i class="material-icons left red-text text-accent-2">phone</i>Contact</a></li>
		</ul>

		<div class="scrollspy" id="home">
			<div class="row">
				<div class="col m3"></div>
				<div class="col m9">
					<h4 class="section blue-text text-ligthen-3"><i class="medium material-icons left">face</i>A genuine new fish in the freelancing sea</h4>
					<h4 class="section right-align teal-text text-lighten-3"><i class="medium material-icons right">favorite</i>Loving HTML5, CSS3, JS and Laravel</h4>
					<h4 class="section yellow-text text-lighten-3"><i class="medium material-icons left">edit</i>Coding to create value for our budding entrepreneurs</h4>
					<div class="carousel">
						<a class="carousel-item"><img src="{{asset('img/ig/1.png')}}"></a>
						<a class="carousel-item"><img src="{{asset('img/ig/2.png')}}"></a>
						<a class="carousel-item"><img src="{{asset('img/ig/3.png')}}"></a>
						<a class="carousel-item"><img src="{{asset('img/ig/4.png')}}"></a>
					</div>
				</div>
			</div>
		</div>

		<div class="scrollspy" id="services">
			<div class="row">
				<div class="col m3"></div>
				<div class="col m9 center-align">
					<h4 class="white-text section">Web Design | WordPress | Web Development</h4>
					<div class="row">
						<div class="col m4">
							<div class="card">
								<div class="card-image">
									<img src="{{asset('img/webDesign.jpg')}}">
								</div>
								<div class="card-content center-align">
									<h5>Did you know that...</h5>
									<p><strong>48%</strong> of people cited a website’s design as the number one factor in deciding the credibility of a business?</p>
									<p>We believe a clean design is the only design!</p>
									<br>
									<a href="#contact" class="btn waves-effect waves-light blue accent-2">Go!</a>
								</div>
							</div>
						</div>
						<div class="col m4">
							<div class="card">
								<div class="card-image">
									<img src="{{asset('img/wordpress.jpg')}}">
								</div>
								<div class="card-content center-align">
									<h5> Can't decide? </h5>
									<p>We understand. WordPress offers a wide range of different themes, plugins and content. It could be <strong>daunting</strong> at times.</p>
									<p>Let us take care of your worries and we'll build an awesome one for you!</p>
									<br>
									<a href="#projects" class="btn waves-effect waves-light orange darken-2">Go!</a>
								</div>
							</div>
						</div>
						<div class="col m4">
							<div class="card">
								<div class="card-image">
									<img src="{{asset('img/webDev.jpg')}}">
								</div>
								<div class="card-content center-align">
									<h5>Like we always say...</h5>
									<p>Every notable business owner needs to have an <strong>online presence</strong> in one form or another.</p>
									<p>We provide mesmerizing and functional sites that would suit your needs.</p>
									<br>
									<a href="#projects" class="btn waves-effect waves-light red accent-2">Go!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="scrollspy" id="projects">
			<div class="row">
				<div class="col m3"></div>
				<div class="col m9 center-align">
					<h3 class="section white-text">Check out our recent projects!</h3>
					<div class="row">
						<div class="col m6 showcase">
							<img class="materialboxed" src="{{asset('img/lingo/Lingo.jpg')}}">
							<a href="/lingo" class="btn waves-effect waves-light orange darken-2 center-align buttonView"><i class="material-icons left">pageview</i>See more</a>
						</div>
						<div class="col m6 showcase">
							<img class="materialboxed" src="{{asset('img/4district/4district.jpg')}}">
							<a href="/4district" class="btn waves-effect waves-light teal darken-4 center-align buttonView"><i class="material-icons left">pageview</i>See more</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="scrollspy" id="contact">
			<div class="row">
				<div class="col m3"></div>
				<div class="col m9 center-align">
					<div class="row">
						<div class="col m6">
							<div class="card form">
								<div class="card-image waves-effect waves-block waves-light">
							    	<img class="contactImg activator" src="{{asset('img/contactform.jpg')}}">
							    </div>
							    <div class="card-content activator">
							    	<h4 class="activator">Interested? Contact us</h4>
							    </div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
									<form action="" method="POST">
										<div class="input-field">
											<input type="text" name="name" required>
											<label for="name">Enter your name</label>
										</div>
										<div class="input-field">
											<input type="email" name="email" required>
											<label for="email">Can we have your email?</label>
										</div>
										<div class="input-field">
											<textarea class="materialize-textarea" name="message" required></textarea>
											<label for="message">What do you have to say?</label>
										</div>
										<div class="input-field">
											<button class="btn orange darken-2 waves-effect waves-light"><i class="material-icons right">send</i>Send</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col m6">
							<div class="card form2">
								<div class="card-panel white-text teal darken-2">
									<h5 class="center">Here's some hint for you</h5>
									<br>
									<ul class="collection black-text">
										<li class="collection-item"><i class="material-icons left">phone_android</i>+673 890 2473</li>
										<li class="collection-item"><i class="material-icons left">mail_outline</i>thecursivedeveloper@gmail.com</li>
										<li class="collection-item"><i class="material-icons left">place</i>Somewhere in Brunei</li>
									</ul>
								</div>
							</div>
							<div class="card" id="quiz">
								<div class="card-content">
									<h5 class="center">What is Laravel?</h5>
									<div class="input-field" id="answerField">
										<input type="text">
									</div>
									<div class="input-field">
										<button class="btn waves-effect waves-light blue accent-2" id="answer">see answer</button>
									</div>
									<h4 class="center hidden" id="answerReveal">It is a popular PHP framework that we use to build tonnes of stuff!</h4>
								</div>
							</div>
						</div>
					</div>
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
						<li><a href="#homeS" class="blue-text text-accent-2" id="homeSmall">Home</a></li>
						<li><a href="#servicesS" id="servicesSmall" class="teal-text text-accent-2">Services</a></li>
						<li><a href="#projectsS" id="projectsSmall" class="yellow-text text-lighten-3">Projects</a></li>
						<li><a href="#contactS" id="contactSmall" class="red-text text-accent-2">Contact</a></li>
					</ul>
				</div>
		    </nav>
		</div>
		<div class="center-align smallShowcase">
			<img src="{{asset('img/TheCursiveDev.png')}}">
		</div>
		
		<div class="slider smallSlider scrollspy" id="homeS">
			<ul class="slides smallSlides">
				<li>
					<img src="{{asset('img/bgc/homeIMG.jpg')}}">
					<div class="caption center-align">
						<h6 class="black-text position3">A new fish in the freelancing world</h6>
					</div>
				</li>
				<li>
					<img src="{{asset('img/bgc/servicesIMG.jpg')}}">
					<div class="caption right-align">
						<h6>Loving the web</h6>	
					</div>
				</li>
				<li>
					<img src="{{asset('img/bgc/projectsIMG.jpg')}}">
					<div class="caption left-align">
						<h6 class="position3">Efficient flow</h6>		
					</div>
				</li>
				<li>
					<img src="{{asset('img/bgc/contactsIMG.jpg')}}">
					<div class="caption center-align">
						<h6 class="position3">Catch me in the social media world</h6>
					</div>
				</li>
			</ul>
		</div>
	
		<div class="scrollspy" id="servicesS">
			<div class="row marginBOFF">
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="{{asset('img/webDesign.jpg')}}">
						</div>
						<div class="card-content center-align">
							<h5>Did you know that...</h5>
							<p><strong>48%</strong> of people cited a website’s design as the number one factor in deciding the credibility of a business?</p>
							<p>We believe a clean design is the only design!</p>
							<br>
							<a href="#contactS" class="btn waves-effect waves-light blue accent-2">Go!</a>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="{{asset('img/wordpress.jpg')}}">
						</div>
						<div class="card-content center-align">
							<h5> Can't decide? </h5>
							<p>We understand. WordPress offers a wide range of different themes, plugins and content. It could be <strong>daunting</strong> at times.</p>
							<p>Let us take care of your worries and we'll build an awesome one for you!</p>
							<br>
							<a href="#projectsS" class="btn waves-effect waves-light orange darken-2">Go!</a>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="{{asset('img/webDev.jpg')}}">
						</div>
						<div class="card-content center-align">
							<h5>Like we always say...</h5>
							<p>Every notable business owner needs to have an <strong>online presence</strong> in one form or another.</p>
							<p>We provide mesmerizing and functional sites that would suit your needs.</p>
							<br>
							<a href="#projectsS" class="btn waves-effect waves-light red accent-2">Go!</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="scrollspy" id="projectsS">
			<h6 class="white-text center">Check out our recent projects!</h6>
			<div class="row center-align">
				<div class="col s6">
					<a href="/lingo" class="waves-effect waves-light"><img src="{{asset('img/lingo/Lingo.jpg')}}"></a>
				</div>
				<div class="col s6">
					<a href="/4district" class="waves-effect waves-light"><img src="{{asset('img/4district/4district.jpg')}}"></a>
				</div>
			</div>
		</div>

		<div class="scrollspy" id="contactS">
			<div class="card">
				<div class="card-content activator">
			    	<h5 class="activator center">Interested? Contact us</h5>
			    </div>
				<div class="card-image waves-effect waves-block waves-light">
			    	<img class="contactImg activator" src="{{asset('img/contactform.jpg')}}">
			    </div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					<form action="" method="POST">
						<div class="input-field">
							<input type="text" name="name" required>
							<label for="name">Enter your name</label>
						</div>
						<div class="input-field">
							<input type="email" name="email" required>
							<label for="email">Can we have your email?</label>
						</div>
						<div class="input-field">
							<textarea class="materialize-textarea" name="message" required></textarea>
							<label for="message">What do you have to say?</label>
						</div>
						<div class="input-field center-align">
							<button class="btn orange darken-2 waves-effect waves-light"><i class="material-icons right">send</i>Send</button>
						</div>
					</form>
				</div>
			</div>
			<div class="card-panel white-text teal darken-2 extraInfo">
				<h5 class="center">Here's some hint for you</h5>
				<br>
				<ul class="collection black-text">
					<li class="collection-item"><i class="material-icons left">phone_android</i>+673 890 2473</li>
					<li class="collection-item"><i class="material-icons left">mail_outline</i>thecursivedeveloper@gmail.com</li>
					<li class="collection-item"><i class="material-icons left">place</i>Somewhere in Brunei</li>
				</ul>
			</div>
		</div>

		<footer class="white-text grey darken-1 center-align">
			<h6>TheCursiveDeveloper &copy; 2018</h6>
		</footer>
	</section>
@endsection