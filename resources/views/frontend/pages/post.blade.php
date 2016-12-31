@extends('frontend.templates.default')
@section('content')

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
						@if($post->getMedia()->isEmpty()==false)
							<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="true" data-transition="fade">
								@foreach($post->getMedia() as $item)
									<div class="item dragCursor">
										<img src="{{asset($item->getUrl())}}" class="img-responsive" data-src="{{asset($item->getUrl())}}/820x500/#888:#ccc/auto/" alt="img" />
									</div>
								@endforeach
							</div>
						@else
							<div class="owl-carousel text-left" data-navigation="false" data-singleitem="true" data-autoplay="true" data-transition="fade">
								<div class="item dragCursor">
									<img src="assets/images/1x1.png" class="img-responsive" data-src="holder.js/820x500/#888:#ccc/auto/" alt="img" />
								</div>
								<div class="item dragCursor">
									<img src="assets/images/1x1.png" class="img-responsive" data-src="holder.js/820x500/#676767:#ccc/auto/" alt="img" />
								</div>
								<div class="item dragCursor">
									<img src="assets/images/1x1.png" class="img-responsive" data-src="holder.js/820x500/#888:#ccc/auto/" alt="img" />
								</div>
							</div>
						@endif


						<!-- article content -->
						<article>
							<summary>{!! $post->summary !!}</summary>
							<p>{!! $post->description !!}</p>
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
						
						<hr /><!-- divider -->

						<!-- COMMENTS -->
						<div id="comments">
							{{-- <h2><span class="fb-comments-count" data-href="http://localhost:8000/post/2"></span> Comments</h2> --}}
							<!-- comment item -->
							{{-- FACEBOOK --}}
							<div class="fb-comments" data-href="http://localhost:8000/post/{{$post->id}}" data-width="750" data-numposts="3"></div>
							<div class="spacer">
							<!-- 60px spacer --></div>
				
						</div><!-- /COMMENTS -->

					</div>

					<!-- SIDEBAR -->
					<div class="right col-md-3">

						<!-- blog search -->
	{{-- 					<div class="widget">

							<h3>Blog Search</h3>

							<form action="#" method="get" class="blog-search col-lg-12 nomargin nopadding">
								<div class="input-group input-group-lg">
									<input type="text" class="form-control" name="s" id="s" placeholder="..." />
									<span class="input-group-btn">
										<button class="btn btn-primary"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</form>
						</div> --}}

						<!-- recent work -->
		{{-- 				<div class="widget">

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
 --}}
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


@endsection