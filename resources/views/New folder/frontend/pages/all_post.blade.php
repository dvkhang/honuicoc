@extends('frontend.templates.default-post')
@section('content')

		<!-- BLOG -->
		<section id="blog">
			<article class="container">

				<div class="row">
					<div class="left col-md-9">


						<!-- blog item -->
					@if($posts->isEmpty()==false)
						@foreach($posts as $post)
						<div class="item">

							<!-- article title -->
							<div class="item-title">
								<h2><a href="{{url('post', ['id'=>$post->id])}}">{{$post->title}}</a></h2>
								<a href="{{url('category', ['id'=>$post->category->id])}}" class="label label-default light"><i class="fa fa-dot-circle-o"></i> {{$post->category->name}}</a> 
								<span class="label label-default light">{{$post->updated_at}}</span> 
							</div>

							<!-- image -->
							<figure>
		                        @if($post->getMedia()->isEmpty()==false)
		                            <img src="{{asset($post->getMedia()[0]->getUrl())}}" style="max-width: 820px; max-height: 500px;" class="img-responsive" data-src="{{asset($post->getMedia()[0]->getUrl())}}/820x500/#676767:#555555/auto/" alt="img" />
		                        @else
		                            <img src="assets/images/1x1.png" class="img-responsive" data-src="holder.js/820x500/#676767:#555555/auto/" alt="img" />
		                        @endif
		                    </figure>

							<!-- blog short preview -->
							<p>
								{!! $post->summary !!}
							</p>

							<!-- read more button -->
							<a href="{{url('post', ['id'=>$post->id])}}" class="btn btn-xs"><i class="fa fa-sign-out"></i> Xem thêm</a>

						</div>
						@endforeach
					@endif	
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
						

						<!-- categories -->
						<div class="widget">

							<h3>Danh mục</h3>

							<ul>
								@foreach($categories as $category)
									<li><a href="{{url('category', ['id'=>$category->id])}}"><i class="fa fa-dot-circle-o"></i> {{$category->name}}</a></li>
								@endforeach
							</ul>

						</div>

						<!-- recent posts -->
						<div class="widget">

							<h3>Bài đăng gần đây</h3>

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