@extends('frontend.templates.default')
@section('content')

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
				@else
					<img src="{{asset('frontend')}}/images/page5_img1.jpg" >
				@endif
				<div class="clear"></div>
				
				<div class="extra_wrapper">
					<br>
					<p class="text1">{!! html_entity_decode($post->description) !!}</p>
				</div>
			</div>
			

			
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