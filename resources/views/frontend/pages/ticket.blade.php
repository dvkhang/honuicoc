@extends('frontend.templates.default')
@section('content')

<div class="content">
<br>
	<div class="row container">
	@foreach($tickets as $ticket)
		<div class="col-lg-4">
			<h3 class="text-center">{{$ticket->classify}}</h3>
			@if($ticket->getMedia()->isEmpty()==false)
					<img src="{{asset($post->getMedia()[0]->getUrl())}}">
				@else
					<img src="{{asset('frontend')}}/images/page5_img1.jpg" >
				@endif
			<h4 class="text-center">Giá vé: {{$ticket->price}}VNĐ</h4>
		</div>
	@endforeach
	</div>
</div>



@endsection