
<!DOCTYPE html>
<html lang="en">
<head>
<title>Avision</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{  asset('assets/frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{  asset('assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{  asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{  asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{  asset('assets/frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{  asset('assets/frontend/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css')}}">
<link rel="stylesheet" type="text/css" href="{{  asset('assets/frontend/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{  asset('assets/frontend/styles/responsive.css')}}">
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
								<li class="active"><a href="index">Home</a></li>
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
								<img class="weather_icon" <img src="{{  asset('assets/frontend/images/cloud.png')}}" alt="">
							</div>
							<form action="#">
								<input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
								<img class="header_search_icon" <img src="{{  asset('assets/frontend/images/search.png')}}" alt="">
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

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Avision</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
				<img class="header_search_icon menu_mm" <img src="{{  asset('assets/frontend/images/search_2.png')}}" alt="">
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">home</a></li>
				<li class="menu_mm"><a href="#">Fashion</a></li>
				<li class="menu_mm"><a href="#">Gadgets</a></li>
				<li class="menu_mm"><a href="#">Lifestyle</a></li>
				<li class="menu_mm"><a href="#">Video</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(assets/frontend/images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
										<div class="home_slider_item_title">
											<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
										</div>
										<div class="home_slider_item_link">
											<a href="post.html" class="trans_200">Continue Reading
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Similar Posts -->
					<div class="similar_posts_container">
						<div class="container">
							<div class="row d-flex flex-row align-items-end">

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

							</div>
						</div>

						<div class="home_slider_next_container">
							<div class="home_slider_next" style="background-image:url(assets/frontend/images/home_slider_next.jpg)">
								<div class="home_slider_next_background trans_400"></div>
								<div class="home_slider_next_content trans_400">
									<div class="home_slider_next_title">next</div>
									<div class="home_slider_next_link">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(assets/frontend/images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
										<div class="home_slider_item_title">
											<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
										</div>
										<div class="home_slider_item_link">
											<a href="post.html" class="trans_200">Continue Reading
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Similar Posts -->
					<div class="similar_posts_container">
						<div class="container">
							<div class="row d-flex flex-row align-items-end">

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

							</div>
						</div>

						<div class="home_slider_next_container">
							<div class="home_slider_next" style="background-image:url(assets/frontend/images/home_slider_next.jpg)">
								<div class="home_slider_next_background trans_400"></div>
								<div class="home_slider_next_content trans_400">
									<div class="home_slider_next_title">next</div>
									<div class="home_slider_next_link">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(assets/frontend/images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
										<div class="home_slider_item_title">
											<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
										</div>
										<div class="home_slider_item_link">
											<a href="post.html" class="trans_200">Continue Reading
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Similar Posts -->
					<div class="similar_posts_container">
						<div class="container">
							<div class="row d-flex flex-row align-items-end">

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
									</div>
								</div>

							</div>
						</div>

						<div class="home_slider_next_container">
							<div class="home_slider_next" style="background-image:url(assets/frontend/images/home_slider_next.jpg)">
								<div class="home_slider_next_background trans_400"></div>
								<div class="home_slider_next_content trans_400">
									<div class="home_slider_next_title">next</div>
									<div class="home_slider_next_link">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="custom_nav_container home_slider_nav_container">
				<div class="custom_prev custom_prev_home_slider">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
						<polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
					</svg>
				</div>
		        <ul id="custom_dots" class="custom_dots custom_dots_home_slider">
					<li class="custom_dot custom_dot_home_slider active"><span></span></li>
					<li class="custom_dot custom_dot_home_slider"><span></span></li>
					<li class="custom_dot custom_dot_home_slider"><span></span></li>
				</ul>
				<div class="custom_next custom_next_home_slider">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
						<polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
					</svg>
				</div>
			</div>

		</div>
	</div>

	<!-- Page Content -->
{{-- content --}}
    @yield('content')
{{-- end content --}}
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

<script src="{{  asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{  asset('assets/frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{  asset('assets/frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{  asset('assets/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{  asset('assets/frontend/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{  asset('assets/frontend/plugins/easing/easing.js')}}"></script>
<script src="{{  asset('assets/frontend/plugins/masonry/masonry.js')}}"></script>
<script src="{{  asset('assets/frontend/plugins/masonry/images_loaded.js')}}"></script>
<script src="{{  asset('assets/frontend/js/custom.js')}}"></script>
</body>
</html>

@section('js')
<script>
    var: url ='api/json'
    $.ajax({
        url: url + '/latest',
        dataType: 'json',
        success: function(berhasil) {
            $.each(berhasil.data, $function(key, value){
                $(".berita-terakhir").append(
                    `
                isi dari child element yang akan menampilkan data dari json
                     `
                )
            })
         },
         error: function(gagal){
             console.log(gagal)
         }
</script>
@endsection
