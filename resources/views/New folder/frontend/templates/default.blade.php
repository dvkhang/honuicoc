<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Hồ Núi Cốc - Chiêm ngưỡng vẻ đẹp thiên tạo</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!--[if lt IE 9]>
			<script type="text/javascript" src="{{asset('frontend')}}/plugins/lt-ie9/html5.js"></script>
			<script type="text/javascript" src="{{asset('frontend')}}/plugins/lt-ie9/respond.min.js"></script>
			<script type="text/javascript" src="{{asset('frontend')}}/plugins/lt-ie9/excanvas.compiled.js"></script>
		<![endif]--> 

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Dosis:300,400" rel="stylesheet" type="text/css" />


		<!-- CORE CSS FRAMEWORK -->
		<link href="{{asset('frontend')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('frontend')}}/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('frontend')}}/plugins/font-linecons/linecons.css" rel="stylesheet" type="text/css" />

		<!-- PLUGINS -->
		<link href="{{asset('frontend')}}/css/superslides.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('frontend')}}/css/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('frontend')}}/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

		<!-- CSS TEMPLATE -->
		<link href="{{asset('frontend')}}/css/reset.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('frontend')}}/css/framework.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('frontend')}}/css/typography.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('frontend')}}/css/layout.css" rel="stylesheet" type="text/css" />

		<link href="{{asset('frontend')}}/css/blog.css" rel="stylesheet" type="text/css" />

		<!-- colors : demo only -->
		<link href="{{asset('frontend')}}/css/color/green.css" rel="stylesheet" type="text/css" /><!-- default style : green-->
		<link href="{{asset('frontend')}}/css/color/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />
		<link href="{{asset('frontend')}}/css/color/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />
		<link href="{{asset('frontend')}}/css/color/green.css" rel="alternate stylesheet" type="text/css" title="green" />
		<link href="{{asset('frontend')}}/css/color/red.css" rel="alternate stylesheet" type="text/css" title="red" />
		<link href="{{asset('frontend')}}/css/color/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />
		<link href="{{asset('frontend')}}/css/color/gray.css" rel="alternate stylesheet" type="text/css" title="gray" />
		<link href="{{asset('frontend')}}/css/color/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />
		<link href="{{asset('frontend')}}/css/color/mauve.css" rel="alternate stylesheet" type="text/css" title="mauve" />

		<!-- ICONS -->
		<link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon.png" type="image/x-icon" />
		<link rel="icon" href="{{asset('frontend')}}/images/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon.ico" type="image/x-icon" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- STYLESWITCHER -->
		<link href="{{asset('frontend')}}/plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css"/>

		<!-- Morenizr -->
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/modernizr.min.js"></script>
	</head>
	<body>


		<!-- HOME -->
		<section id="home" class="half-screen"><!-- full-screen or half-screen (550px height) -->

			<div id="slider">

				<!-- slider navigation -->
				<nav class="slides-navigation">
					<a class="prev" href="#"></a>
					<a class="next" href="#"></a>
				</nav>

				<ul class="slides-container">

					<!-- Item 1 -->
					<li>
						<div class="image-caption">
							<hr /><hr />
							<div class="inner">
								<h1 class="">nàng công, chàng cốc</h1>
								<p>Huyền thoại<strong> Lưu truyền</strong> </p>
							</div>
							<hr /><hr />
						</div>

						<span class="overlay"></span>
						<div style="background-image: url('{{asset('frontend')}}/images/preview/slider/slider3.jpg');" class="fullscreen-img"></div>
					</li>

					<!-- Item 2 -->
					<li>
						<div class="image-caption">
							<hr /><hr />
							<div class="inner">
								<h1 class="bigtext strtoupper nomargin">ONE PAGE DESIGN</h1>
								<p>THE TEMPLATE IS EASY TO SET UP</p>
							</div>
							<hr /><hr />
						</div>

						<!--<span class="overlay"></span>-->
						<div style="background-image: url('{{asset('frontend')}}/images/preview/slider/slider2.jpg');" class="fullscreen-img"></div>
					</li>


					<!-- Item 3 -->
					<li>
						<div class="image-caption">
							<hr /><hr />
							<div class="inner">
								<h2 class="strtoupper nomargin">VUI CHƠI MẠO HIỂM</h2>
							</div>
							<hr /><hr />
						</div>

						<!--<span class="overlay"></span>-->
						<div style="background-image: url('{{asset('frontend')}}/images/preview/slider/slider1.jpg');" class="fullscreen-img"></div>
					</li>


				</ul>

			</div>

		</section>
		<!-- /HOME -->



		<!-- Main Nav -->
		<header id="header">

			<nav class="navbar navbar-inverse" role="navigation"><!-- add "wihite" class for white nav bar -->
				<div class="container">

					<!-- Mobile Menu Button -->
					<button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".navbar-collapse"></button>

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar_brand scrollTo" href="{{url('/')}}">
							<img src="{{asset('frontend')}}/images/logo/100x100/white.png" alt="" width="50" height="50" /> 
							<!--
								Span class:
									- dark
									- white
									- styleColor (if you select "green" style color, the color will be green).

									You can combine them 
									Example:
										<span class="white">ISIS</span><span class="styleColor">ONE</span>
							-->
							<span class="">HỒ NÚI CỐC</span>
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<!-- Fullscreen Button - Unavailable for IE -->
						<a href="#" class="btn-fullscreen"><i class="fa fa-external-link"></i></a>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#work" class="scrollTo">Giới thiệu</a></li>
							<li><a href="#services" class="scrollTo">Giá Vé</a></li>
							<li><a href="{{url('post')}}">Bài Viết</a></li>
							<li><a href="#about" class="scrollTo">Liên Hệ</a></li>
							<li><a href="faq.html">FAQ</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->

				</div>
			</nav>

		</header>
		<!-- /Main Nav -->




		<!-- /Main Nav -->
		@yield('content')




		<!-- FOOTER -->
		<footer>

			<!-- SCROOL TO TOP -->
			<a href="#toTop" class="fa fa-arrow-up toTop"></a>

			<div class="container">

				<div class="row">

					<div class="col-md-6 copyright">
						Hồ Núi Cốc, LTD<br />
						2016 &copy; Lê Trung Dũng.
					</div>

					<div class="col-md-6 text-right">
						<a href="#" class="social fa fa-facebook"></a>
						<a href="#" class="social fa fa-twitter"></a>
						<a href="#" class="social fa fa-google-plus"></a>
					</div>

				</div>

			</div>
		</footer>
		<!-- /FOOTER -->

		

		<!-- CORE FILES -->
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery.isotope.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/masonry.js"></script>

		<!-- PLUGINS -->
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery-appear/jquery.appear.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/superslides/dist/jquery.superslides.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery-owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/carouFredSel/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery-countTo/jquery.countTo.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/holder.js"></script><!-- delete on postion -->

		<!-- js scripts -->
		<script async type="text/javascript" src="{{asset('frontend')}}/js/scripts.js"></script>

		<script async type="text/javascript" src="{{asset('frontend')}}/plugins/styleswitcher/styleswitcher.js"></script>


		<!-- Change UA-XXXXX-X with your site ID -->
		<!--<script>
			window._gaq = [['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
			Modernizr.load({load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'});
		</script>  -->

	</body>
</html>