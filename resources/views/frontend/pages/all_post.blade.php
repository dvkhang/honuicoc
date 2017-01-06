@extends('frontend.templates.default')
@section('content')

<div class="content">
	<div class="ic">Hồ Núi Cốc</div>
	<div class="container_12">
		<div class="grid_9">
			<h3>Bài viết mới nhất</h3>
			@foreach($posts as $post)
			<div class="blog">
				<time datetime="{{$post->updated_at}}">23<br>
				APR</time>
				<div class="extra_wrapper">
					<div class="text1 upp">{{$post->title}} </div>
				</div>
				<div class="clear"></div>
				@if($post->getMedia()->isEmpty()==false)
					<img src="{{asset($post->getMedia()[0]->getUrl())}}" alt="" class="img_inner fleft">
				@else
					<img src="{{asset('frontend')}}/images/page5_img1.jpg" alt="" class="img_inner fleft">
				@endif
				<div class="extra_wrapper">
					<p class="text1">Gellentesque imperdiet gerti loki holewvelit neque. Ut vestibulum mi sit amet ornare. </p>
					<p>{{$post->summary}}</p>
					Vivamus imperdiet ante vitae lorem varius tristique meli. Phasellus tristique lectus id volutpat condimentum. Mauris quam lectus cursus at congue nec ultrices luctus orci quam lectus cursus at congue.
					<br>
					<a href="{{url('post', ['id'=>$post->id])}}" class="btn">Xem chi tiết</a>
				</div>
			</div>
			@endforeach()
			
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