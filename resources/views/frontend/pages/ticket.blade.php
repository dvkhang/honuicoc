@extends('frontend.templates.default',['title'=>'Bảng giá vé'])
@section('content')

<div class="content">
	<div class="row container" style="padding-top: 20px;">
	@foreach($tickets as $ticket)
		<div class="col-lg-4">
			
			@if($ticket->getMedia()->isEmpty()==false)
					<img src="{{asset($post->getMedia()[0]->getUrl())}}">
				@else
					<img src="{{asset('frontend')}}/images/page5_img1.jpg" >
				@endif
			<h3 class="text-center">{{$ticket->classify}}</h3>	
			<h4 class="text-center">Giá vé: {{$ticket->price}}VNĐ</h4>
		</div>
	@endforeach
	</div>
</div>



@endsection