<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/contact_responsive.css')}}">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a href="#">avision</a></div>
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="/">Home</a></li>
								<li><a href="fashion">Fashion</a></li>
								<li><a href="gadgets">Gadgets</a></li>
								<li><a href="lifestyle">Lifestyle</a></li>
								<li><a href="video">Video</a></li>
								<li><a href="contact">Contact</a></li>
							</ul>
						</nav>
						<div class="search_container ml-auto">
							<div class="weather">
								<div class="temperature">+10°</div>
								<img class="weather_icon" src="images/cloud.png" alt="">
							</div>
							<form action="#">
								<input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
								<img class="header_search_icon" src="images/search.png" alt="">
							</form>

						</div>
						<div class="hamburger ml-auto menu_mm">
							<i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->


	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/frontend/images/regular.jpg')}}" data-speed="0.8"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<!-- Post Comment -->
						<div class="post_comment">
							<div class="contact_form_container">
								<form action="#">
									<input type="text" class="contact_input contact_input_name" placeholder="Your Name" required="required">
									<input type="email" class="contact_input contact_input_email" placeholder="Your Email" required="required">
									<textarea class="contact_text" placeholder="Your Message" required="required"></textarea>
									<button type="submit" class="contact_button">Send Message</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-9 order-lg-1 order-2">
					<div class="footer_content">
						<div class="footer_logo"><a href="#">avision</a></div>
						<div class="footer_social">
							<ul>
								<li class="footer_social_facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer_social_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer_social_pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="footer_social_vimeo"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								<li class="footer_social_instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="footer_social_google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-3 order-lg-2 order-1">
					<div class="subscribe">
						<div class="subscribe_background"></div>
						<div class="subscribe_content">
							<div class="subscribe_title">Subscribe</div>
							<form action="#">
								<input type="email" class="sub_input" placeholder="Your Email" required="required">
								<button class="sub_button">
									<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
										<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
									</svg>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{ asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('assets/frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('assets/frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('assets/frontend/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('assets/frontend/plugins/masonry/masonry.js')}}"></script>
<script src="{{ asset('assets/frontend/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/contact.js')}}"></script>
</body>
</html>
