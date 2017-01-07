@extends('frontend.templates.default',['title'=>'Bài viết '.$post->title])
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=251181661908172";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="content">
	<div class="ic">Hồ Núi Cốc</div>
	<div class="container_12">
		<div class="grid_9">
			<h3>{{$post->title}}</h3>
			<div class="blog">
				<time datetime="{{$post->updated_at}}">23<br>
				APR</time>
				@if($post->getMedia()->isEmpty()==false)
					<img src="{{asset($post->getMedia()[0]->getUrl())}}">
				@endif
				<div class="clear"></div>
				
				<div class="extra_wrapper">
					<br>
					<p class="text1">{!! html_entity_decode($post->description) !!}</p>
				</div>
			</div>
			<div class="fb-comments" data-href="http://localhost:8000/post/{{$post->id}}" data-width="700" data-numposts="5"></div>

			
		</div>

		<div class="grid_3">
			<h3>Danh mục</h3>
			<ul class="list2 l1">
			@foreach($categories as $category)
				<li><a href="{{url('category', ['id'=>$category->id])}}">{{$category->name}}</a></li>
			@endforeach	
				
			</ul>
			<h3>Bài viết gần nhất</h3>
			<ul class="list2 l1">
			@foreach($recent_posts as $recent_post)
				<li><a href="{{url('post', ['id'=>$recent_post->id])}}">{{$recent_post->title}}</a></li>
			@endforeach	
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>



@endsection