<!doctype html>
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

			<div class="container text-center">
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
							<li><a href="{{url('/')}}#home">Home</a></li>
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

						<!-- article title -->
						<header>
							<h1>{{$post->title}}</h1>
							<small class="fsize13">
								<a href="blog.html" class="label label-default light"><i class="fa fa-dot-circle-o"></i> {{$post->category->name}}</a>
								<a href="#comments" class="scrollTo label label-default light"><i class="fa fa-comment-o"></i> 3 Comments</a>
								<span class="label label-default light">September 12, 2013</span> 
							</small>
						</header>

						<!-- carousel -->
						<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="true" data-transition="fade">
							<div class="item dragCursor">
								<img src="{{asset('frontend')}}/images/1x1.png" class="img-responsive" data-src="holder.js/820x500/#888:#ccc/auto/" alt="img" />
							</div>
							<div class="item dragCursor">
								<img src="{{asset('frontend')}}/images/1x1.png" class="img-responsive" data-src="holder.js/820x500/#676767:#ccc/auto/" alt="img" />
							</div>
							<div class="item dragCursor">
								<img src="{{asset('frontend')}}/images/1x1.png" class="img-responsive" data-src="holder.js/820x500/#888:#ccc/auto/" alt="img" />
							</div>
						</div>


						<!-- article content -->
						<article>
							<summary>{!! $post->summary !!}</summary>
							<p>{!! $post->description !!}}}</p>
						</article>

						<div class="divider"><!-- lines divider --></div>

						<!-- SOCIAL -->
						<p class="socials">
							<a href="#" class="rounded-icon social fa fa-facebook"><!-- facebook --></a>
							<a href="#" class="rounded-icon social fa fa-twitter"><!-- twitter --></a>
							<a href="#" class="rounded-icon social fa fa-google-plus"><!-- google plus --></a>
							<a href="#" class="rounded-icon social fa fa-pinterest"><!-- pinterest --></a>
							<a href="#" class="rounded-icon social fa fa-linkedin"><!-- linkedin --></a>
						</p>

						<!-- TAGS -->
						<p class="fsize16"> Tags:
							<a class="label label-default light" href="#"><i class="fa fa-tags"></i> Business</a> 
							<a class="label label-default light" href="#"><i class="fa fa-tags"></i> Design</a> 
							<a class="label label-default light" href="#"><i class="fa fa-tags"></i> Technology</a> 
						</p>

						
						<hr /><!-- divider -->


						<!-- COMMENTS -->
						<div id="comments">
							<h2>3 Comments</h2>

							<!-- comment item -->
							<div class="comment">

								<!-- user-avatar -->
								<span class="user-avatar">
									<img class="pull-left media-object" src="{{asset('frontend')}}/images/avatar.png" width="64" height="64" alt="">
								</span>

								<div class="media-body">
									<a href="#commentForm" class="scrollTo replyBtn">reply</a>
									<h4 class="media-heading bold">John Doe</h4>
									<small class="block">September 12, 2013 - 11:23</small>
									Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								</div>
							</div>

							<!-- comment item -->
							<div class="comment">

								<!-- user-avatar -->
								<span class="user-avatar">
									<img class="pull-left media-object" src="{{asset('frontend')}}/images/avatar.png" width="64" height="64" alt="">
								</span>

								<div class="media-body">
									<a href="#commentForm" class="scrollTo replyBtn">reply</a>
									<h4 class="media-heading bold">Diana Doe</h4>
									<small class="block">September 12, 2013 - 11:23</small>
									Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								</div>
							</div>

							<!-- comment item -->
							<div class="comment">

								<!-- user-avatar -->
								<span class="user-avatar">
									<img class="media-object" src="{{asset('frontend')}}/images/avatar.png" width="64" height="64" alt="">
								</span>

								<div class="media-body">
									<a href="#commentForm" class="scrollTo replyBtn">reply</a>
									<h4 class="media-heading bold">Melissa Doe</h4>
									<small class="block">September 12, 2013 - 11:23</small>
									Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 

									<!-- comment reply -->
									<div class="media">

										<!-- user-avatar -->
										<span class="user-avatar">
											<img class="media-object" src="{{asset('frontend')}}/images/avatar.png" width="64" height="64" alt="">
										</span>

										<div class="media-body">
											<h4 class="media-heading bold">Peter Doe</h4>
											<small class="block">September 12, 2013 - 11:23</small>
											Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
										</div>
									</div>

								</div>
							</div>

							<div class="spacer"><!-- 60px spacer --></div>

							<!-- COMMENT FORM -->
							<form id="commentForm" class="form-horizontal" method="post" action="#">
								<div class="row">
									<!-- name -->
									<div class="col-md-4">
											<input required class="form-control input-lg" type="text" name="author" id="author" value="" placeholder="Name *" />
									</div>

									<!-- email -->
									<div class="col-md-4">
											<input required class="form-control input-lg" type="text" name="email" id="email" value="" placeholder="Email *" />
									</div>

									<!-- website -->
									<div class="col-md-4">
											<input class="form-control input-lg" type="text" name="url" id="url" value="" placeholder="Website" />
									</div>
								</div>

								<div class="row">

									<!-- comment -->
									<div class="col-md-12">
										<textarea required class="form-control input-lg" id="comment" name="comment" rows="5" placeholder="Your Comment *"></textarea>
									</div><br />

									<!-- code info -->
									<div class="col-md-12 fsize16">
										<p>Allowed HTML tags: &lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </p>
										<p><small>Inappropriate and irrelevant comments will be removed at an admin's discretion.<br /> Your email is used for verification purposes only, it will never be shared.</small></p>
									</div>
								
									<!-- btn -->
									<div class="col-md-12">
										<p>
											<button class="btn btn-primary">Post Comment</button>
										</p>
									</div>

									<!-- subscribe -->
									<div class="col-md-12 fsize16">
										<p>
											<input type="checkbox" name="subscribe_comments" id="subscribe_comments" value="subscribe" />  
											<label for="subscribe_comments">Notify me of follow-up comments by email.</label>
											<br />
											<input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" /> 
											<label for="subscribe_blog">Notify me of new posts by email.</label>
										</p>
									</div>

								</div>

							</form>
							<!-- /COMMENT FORM -->

						</div><!-- /COMMENTS -->

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