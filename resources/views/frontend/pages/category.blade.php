<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>IsisOne - Personal or Agency Portfolio</title>
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
		<link href="{{asset('frontend')}}/css/color/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />
		<link href="{{asset('frontend')}}/css/color/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />
		<link href="{{asset('frontend')}}/css/color/green.css" rel="alternate stylesheet" type="text/css" title="green" />
		<link href="{{asset('frontend')}}/css/color/red.css" rel="alternate stylesheet" type="text/css" title="red" />
		<link href="{{asset('frontend')}}/css/color/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />
		<link href="{{asset('frontend')}}/css/color/gray.css" rel="alternate stylesheet" type="text/css" title="gray" />
		<link href="{{asset('frontend')}}/css/color/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />
		<link href="{{asset('frontend')}}/css/color/mauve.css" rel="alternate stylesheet" type="text/css" title="mauve" />
		<link href="{{asset('frontend')}}/css/color/green.css" rel="stylesheet" type="text/css" /><!-- default style : green-->

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


		<!-- STYLESWITCHER -->
		<div id="switcher">
			<div class="content-switcher" >        
				<h4>STYLE OPTIONS</h4>

				<p>Color Skin:</p>
				<ul style="width:150px;">            
					<li><a href="#" onclick="setActiveStyleSheet('blue'); return false;" class="color" style="background-color:#50657B"></a></li><!-- default -->
					<li><a href="#" onclick="setActiveStyleSheet('orange'); return false;" class="color" style="background-color:#F07057"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('green'); return false;" class="color" style="background-color:#7E8344"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('red'); return false;" class="color" style="background-color:#e93735"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('pink'); return false;" class="color" style="background-color:#f73f69"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('mauve'); return false;" class="color" style="background-color:#c91ac9"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('yellow'); return false;" class="color" style="background-color:#f1c40f"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('gray'); return false;" class="color" style="background-color:#333333"></a></li>
				</ul>        

				<p>Home Page Template:</p>
				<div class="styled-select">
					<select onchange="window.document.location.href=this.options[this.selectedIndex].value;">  
						
						<optgroup label="+ Personal">
							<option value="index-personal-full.html">01. Fullscreen Slider</option>
							<option value="index-personal-half.html">02. Halfscreen Slider</option>
							<option value="index-personal-half.html">03. Full Video</option>
						</optgroup>

						<optgroup label="+ Agency">
							<option value="index-agency-full.html">01. Fullscreen Slider</option>
							<option value="index-agency-half.html">02. Halfscreen Slider</option>
							<option value="index-agency-video.html">03. Full Video</option>
						</optgroup>

						<optgroup label="+ Application">
							<option value="index-application-full.html">01. Fullscreen Slider</option>
							<option value="index-application-half.html">02. Halfscreen Slider</option>
							<option value="index-application-video.html">03. Full Video</option>
						</optgroup>

						<optgroup label="Misc">
							<option value="countdown-image.html">Count Down - Image</option>
							<option value="countdown-video.html">Count Down - Video</option>
							<option value="index-video-full.html">404 Not Found</option>
							<option value="faq.html">Faq Page</option>
							<option value="text-page.html">Default Text Page</option>
						</optgroup>

					</select>
				</div>

				<div class="switcher-links">
					<a href="elements.html">elements.html</a>
					<a href="typography.html">typography.html</a>
					<a href="icons-fontawsome.html">icons-fontawsome.html</a>
					<a href="icons-linecons.html">icons-linecons.html</a>
				</div>

				<div id="hideSwitcher">&times;</div>
			</div>
		</div>
		<div id="showSwitcher"><i class="fa fa-tint"></i></div>
		<!-- /STYLESWITCHER -->


		<!-- BLOG HEADER -->
		<div class="inner-cover blog-header" style="background-image:url('{{asset('frontend')}}/images/preview/slider/vision.jpg')">
			<!--<span class="overlay"></span>-->

			<div class="text-center">
				<h1 class="big-title">ISIS ONE . BLOG</h1>
				<p>THE TEMPLATE IS EASY TO SET UP</p>
			</div>
		</div>
		<!-- /BLOG HEADER -->



		<!-- Main Nav -->
		<header id="header">

			<nav class="navbar navbar-inverse" role="navigation"><!-- add "wihite" class for white nav bar -->
				<div class="container">

					<!-- Mobile Menu Button -->
					<button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".navbar-collapse"></button>

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar_brand" href="index-personal-full.html">
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
							<span class="">ISIS ONE</span>
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<!-- Fullscreen Button - Unavailable for IE -->
						<a href="#" class="btn-fullscreen"><i class="fa fa-external-link"></i></a>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="index-personal-full.html#home">Home</a></li>
							<li><a href="index-personal-full.html#about">About</a></li>
							<li><a href="index-personal-full.html#work">Work</a></li>
							<li><a href="index-personal-full.html#services">Services</a></li>
							<li class="active"><a href="blog.html">Blog</a></li>
							<li><a href="index-personal-full.html#contact">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->

				</div>
			</nav>

		</header>
		<!-- /Main Nav -->



		<!-- BLOG -->
		<section id="blog">
			<article class="container">

				<div class="row">
					<div class="left col-md-9">


						<!-- blog item -->

						@foreach($posts as $post)
						<div class="item">

							<!-- article title -->
							<div class="item-title">
								<h2><a href="blog-post.html">{{$post->title}}</a></h2>
								<a href="blog.html" class="label label-default light"><i class="fa fa-dot-circle-o"></i> Business</a> 
								<a href="blog-post.html#comments" class="scrollTo label label-default light"><i class="fa fa-comment-o"></i> 3 Comments</a>
								<span class="label label-default light">September 12, 2013</span> 
							</div>

							<!-- image -->
							<figure>
								<img src="{{asset('frontend')}}/images/1x1.png" class="img-responsive" data-src="holder.js/820x500/#676767:#555555/auto/" alt="img" />
							</figure>

							<!-- blog short preview -->
							<p>
								{!! $post->summary !!}}
							</p>

							<!-- read more button -->
							<a href="{{url('post', ['id'=>$post->id])}}" class="btn btn-xs"><i class="fa fa-sign-out"></i> READ MORE</a>

						</div>
						@endforeach
						<!-- /blog item -->




						<!-- PAGINATION -->
						<div class="text-center">
							<ul class="pagination">
								@if($posts->currentPage() != 1)
									<li><a href="{{$posts->previousPageUrl()}}"><i class="fa fa-chevron-left"></i></a></li>
								@endif
								@if($posts->lastPage()>1)
									@for($i=1; $i<=$posts->lastPage(); $i++)
										<li class="{{$posts->currentPage()==$i?'active':''}}"><a href="{{$posts->url($i)}}">{{$i}}</a></li>
									@endfor
								@endif
								@if($posts->lastPage() != $posts->currentPage())
									<li><a href="{{$posts->nextPageUrl()}}"><i class="fa fa-chevron-right"></i></a></li>
								@endif
							</ul>
						</div>
						<!-- /PAGINATION -->


					</div>


					<!-- SIDEBAR -->
					<div class="right col-md-3">

						<!-- blog search -->
						<div class="widget">

							<h3>Blog Search</h3>

							<form action="#" method="get" class="blog-search col-lg-12 nomargin nopadding">
								<div class="input-group input-group-lg">
									<input type="text" class="form-control" name="s" id="s" placeholder="..." />
									<span class="input-group-btn">
										<button class="btn btn-primary"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</form>
						</div>

						<!-- recent work -->
						<div class="widget">

							<h3>Recent Work </h3>

							<a class="popup-image thumb" href="{{asset('frontend')}}/images/preview/slider/1.jpg">
								<img src="{{asset('frontend')}}/images/1x1.png" class="img-responsive" data-src="holder.js/85x85/#888:#555555/auto/" alt="img" />
							</a>
							<a class="popup-video thumb" href="http://www.youtube.com/watch?v=kh29_SERH0Y?rel=0">
								<img src="{{asset('frontend')}}/images/1x1.png" class="ajax-project img-responsive" data-src="holder.js/85x85/#676767:#555555/auto/" alt="img" />
							</a>
							<a class="popup-video thumb" href="http://vimeo.com/23630702">
								<img src="{{asset('frontend')}}/images/1x1.png" class="ajax-project img-responsive" data-src="holder.js/85x85/#888:#555555/auto/" alt="img" />
							</a>

							<a class="external ajax-project thumb" href="project-external-1.html">
								<img src="{{asset('frontend')}}/images/1x1.png" class="ajax-project img-responsive" data-src="holder.js/85x85/#676767:#555555/auto/" alt="img" />
							</a>
							<a class="external ajax-project thumb" href="project-external-2.html">
								<img src="{{asset('frontend')}}/images/1x1.png" class="ajax-project img-responsive" data-src="holder.js/85x85/#888:#555555/auto/" alt="img" />
							</a>
							<a class="external ajax-project thumb" href="project-external-3.html">
								<img src="{{asset('frontend')}}/images/1x1.png" class="ajax-project img-responsive" data-src="holder.js/85x85/#676767:#555555/auto/" alt="img" />
							</a>

							<div class="clearfix"></div>
						</div>

						<!-- categories -->
						<div class="widget">

							<h3>Categories</h3>

							<ul>
								@foreach($categories as $category)
									<li><a href="{{url('category', ['id'=>$category->id])}}"><i class="fa fa-dot-circle-o"></i> {{$category->name}}</a></li>
								@endforeach
							</ul>

						</div>

						<!-- recent posts -->
						<div class="widget">

							<h3>Recent Posts</h3>

							<ul>
								@foreach($recent_posts as $recent_post)
									<li><a href="{{url('post', ['id'=>$recent_post->id])}}"><i class="fa fa-sign-out"></i>{{$recent_post->title}}t</a> <small>23 June 2013 / 12:43</small></li>
								@endforeach
							</ul>

						</div>

					</div>
					<!-- /SIDEBAR -->

				</div>

			</article>
		</section>
		<!-- /BLOG -->



			<!-- FOOTER -->
		<footer>

			<!-- SCROOL TO TOP -->
			<a href="#toTop" class="fa fa-arrow-up toTop"></a>

			<div class="container">

				<div class="row">

					<div class="col-md-6 copyright">
						Your Company, LTD<br />
						2014 &copy; All Rights Reserved.
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
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery-fitvids/jquery.fitvids.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery-appear/jquery.appear.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/superslides/dist/jquery.superslides.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery-owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/carouFredSel/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/jquery-countTo/jquery.countTo.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="{{asset('frontend')}}/plugins/holder.js"></script><!-- delete on production -->

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