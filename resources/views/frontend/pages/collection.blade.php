@extends('frontend.templates.default')
@section('content')

<div class="content"><div class="ic">Hồ Núi Cốc</div>
@foreach($collections as $collection)
@if($collection->getMedia()->isEmpty()==false)
  <div class="container_12">
      <div class="grid_12">
        <h3>Bộ sưu tập : {{$collection->title}}</h3>
      </div>

      <div class="clear"></div>
    
    
      <div class="gallery">
        @foreach($collection->getMedia() as $image)
          <div class="grid_4" style="padding-bottom: 15px;">
            <a href="{{asset($image->getUrl())}}" class="gal img_inner"><img src="{{asset($image->getUrl())}}" alt=""></a>
          </div>
        @endforeach
      </div>

    
      <div class="clear"></div>
  </div>
  @endif
@endforeach
</div>


@endsection

@section('footer')
@parent
<script>
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
      });
       $(function(){
  
  // Initialize the gallery
  $('.gallery a.gal').touchTouch();
 });   
</script>

@stop