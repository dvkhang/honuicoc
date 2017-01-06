<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon.ico" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
		<link rel="stylesheet" href="{{asset('frontend')}}/css/slider.css">
		<link rel="stylesheet" href="{{asset('frontend')}}/css/touchTouch.css">

		<script src="{{asset('frontend')}}/js/jquery.js"></script>
		<script src="{{asset('frontend')}}/js/jquery-migrate-1.1.1.js"></script>
		<script src="{{asset('frontend')}}/js/superfish.js"></script>
		<script src="{{asset('frontend')}}/js/sForm.js"></script>
		<script src="{{asset('frontend')}}/js/jquery.jqtransform.js"></script>
		<script src="{{asset('frontend')}}/js/jquery.equalheights.js"></script>
		<script src="{{asset('frontend')}}/js/jquery.easing.1.3.js"></script>
		<script src="{{asset('frontend')}}/js/tms-0.4.1.js"></script>
		<script src="{{asset('frontend')}}/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="{{asset('frontend')}}/js/jquery.ui.totop.js"></script>
		<script src="{{asset('frontend')}}/js/touchTouch.jquery.js"></script>

		<script>
			$(window).load(function(){
			$('.slider')._TMS({
							show:0,
							pauseOnHover:false,
							prevBu:'.prev',
							nextBu:'.next',
							playBu:false,
							duration:800,
							preset:'random', 
							pagination:false,//'.pagination',true,'<ul></ul>'
							pagNums:false,
							slideshow:8000,
							numStatus:false,
							banners:true,
					waitBannerAnimation:false,
				progressBar:false
			})	;
			 $( "#tabs" ).tabs();
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
			
			
			
		</script>

	</head>
	<body	class="page1">
	
@inject('request', 'Illuminate\Http\Request')
<?php
	$arr=explode('/', $request->path());
?>

		<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="{{url('/')}}"><img src="{{asset('frontend')}}/images/logonuicoc.png" alt="Gerald Harris attorney at law"></a> </h1>
					<div class="clear"></div>
				</div>
				<div class="menu_block">
					<nav class="" >
						<ul class="sf-menu">

							<li class="{{$arr[0]==''?'current':''}}"><a href="{{url('/')}}">Trang chủ</a></li>
							<li class="{{$arr[0]=='about'?'current':''}}" class="with_ul">
								<a href="{{url('/about')}}">Giới thiệu</a>
							</li>
							<li class="{{$arr[0]=='collection'?'current':''}}"><a href="{{url('/collection')}}">Thư viện</a></li>
							<li class="{{$arr[0]=='ticket'?'current':''}}"><a href="{{url('/ticket')}}">Giá vé</a></li>
							<li class="{{$arr[0]=='post'?'current':''}}"><a href="{{url('/post')}}">Bài viết</a></li>
							<li class="{{$arr[0]=='contact'?'current':''}}"><a href="{{url('/contact')}}">Liên hệ</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</header>
		<div class="main">

			
			@yield('content')


		<div class="bottom_block">
			<div class="container_12">
				<div class="grid_2 prefix_2">
					<ul>
						<li><a href="#">FAQS Page</a></li>
						<li><a href="#">People Say</a></li>
					</ul>
				</div>
				<div class="grid_2">
					<ul>
						<li><a href="#">Useful links</a></li>
						<li><a href="#">Partners</a></li>
					</ul>
				</div>
				<div class="grid_2">
					<ul>
						<li><a href="#">Insurance</a></li>
						<li><a href="#">Family Travel</a></li>
					</ul>
				</div>
				<div class="grid_2">
					<h4>Liên hệ với chúng tôi:</h4>
					TEL: 1-800-234-5678<br><a href="#">info@demolink.org</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
			<!--==============================footer=================================-->
		</div>
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#"></a>
						<a href="#"></a>
						<a href="#"></a>
						<a href="#"></a>
					</div>
					<div class="copy">
						Lê Trung Dũng &copy; 2016 | Thực tập tốt nghiệp
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	@section('footer')
	@show
	</body>
</html>