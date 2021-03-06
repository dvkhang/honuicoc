@extends('frontend.templates.default',['title'=>'Trang chủ'])
@section('content')

<div class="container_12">
    <div class="grid_12">
        <div class="slider-relative">
            <div class="slider-block">
                <div class="slider">
                    <a href="#" class="prev"></a><a href="#" class="next"></a>
                    <ul class="items">
                        <li><img src="{{asset('frontend')}}/images/slider444.jpg" alt="">
                            <div class="banner">
                                <div>Hồ Núi Cốc</div>
                                <br>
                                <span> non nước hữu tình</span>
                            </div>
                        </li>
                        <li><img src="{{asset('frontend')}}/images/slider111.jpg" alt="">
                            
                        </li>
                            
                        <li><img src="{{asset('frontend')}}/images/slider222.jpg" alt=""></li>
                        
                        <li><img src="{{asset('frontend')}}/images/slider333.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!--=======content================================-->
<div class="content">
    <div class="ic">Hồ núi cốc</div>
    <div class="container_12">
        <div class="grid_12">
            <h3>Bộ sưu tập</h3>
        </div>
        <div class="boxes">
        @foreach($collections as $collection)
            <div class="grid_4">
                <figure>
                @if($collection->getMedia()->isEmpty()==false)
                    <div><img src="{{asset($collection->getMedia()[0]->getUrl())}}" alt="" width="360" height="380"></div>
                    @else
                    <div><img src="{{asset('frontend')}}/images/page1_img1.jpg" alt=""></div>
                @endif    
                    <figcaption>
                        <h3>{{$collection->title}}</h3>
                    </figcaption>
                </figure>
            </div>
        @endforeach    
{{--             <div class="grid_4">
                <figure>
                    <div><img src="{{asset('frontend')}}/images/page1_img2.jpg" alt=""></div>
                    <figcaption>
                        <h3>New York</h3>
                        Psum dolor sit ametylo gerto consectetur ertori hykill holit adipiscing lity. Donecto rtopil osueremo   kollit asec emmodem geteq tiloli. Aliquam dapibus neclol nami wertoli elittro eget vulpoli no
                        utaterbil congue turpis in su.
                        <a href="" class="btn">Details</a>
                    </figcaption>
                </figure>
            </div>
            <div class="grid_4">
                <figure>
                    <div><img src="{{asset('frontend')}}/images/page1_img3.jpg" alt=""></div>
                    <figcaption>
                        <h3>Paris</h3>
                        Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew dignissim eu velite a rew qw vehicula lacinia arcufasec ro. Aenean lacinia ucibusy fase tortor ut feugiat. Rabi tur oliti aliquam bibendum olor quis malesuadivamu.
                        <a href="" class="btn">Details</a>
                    </figcaption>
                </figure>
            </div> --}}
            <div class="clear"></div>
        </div>
        <div class="grid_8">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Bài viết mới nhất</a></li>
                    <li><a href="#tabs-2">hot Deals</a></li>
                    <li><a href="#tabs-3">All-Inclusive</a></li>
                </ul>
                <div class="clear"></div>
                <div class="tab_cont" id="tabs-1">
                    @foreach($posts as $post)
                        @if($post->getMedia()->isEmpty()==false)
                            <img src="{{asset($post->getMedia()[0]->getUrl())}}" width="246" height="130" alt="">
                        @else
                            <img src="{{asset('frontend')}}/images/page1_img4.jpg" alt="">
                        @endif
                        <div class="extra_wrapper">
                        <br>
                            <div class="text1">{{$post->title}}. </div>
                            
                            {{$post->summary}}
                            <a href="{{url('post', ['id'=>$post->id])}}" class="btn">Xem chi tiết</a>
                            <div class="clear "></div>
                        </div>
                        <div class="clear cl1"></div>
                    @endforeach
                </div>

                <div class="tab_cont" id="tabs-2">
                    <img src="{{asset('frontend')}}/images/page1_img4.jpg" alt="">
                    <div class="extra_wrapper">
                        <div class="text1">Rem psum dr sit amet. </div>
                        <p class="style1">Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.</p>
                        Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.
                        <a href="#" class="btn">Details</a>
                        <div class="clear "></div>
                    </div>
                    <div class="clear cl1"></div>
                    <img src="{{asset('frontend')}}/images/page1_img5.jpg" alt="">
                    <div class="extra_wrapper">
                        <div class="text1 tx1">Hem psuf abr sit dmety. </div>
                        Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi. 
                        <div class="clear"></div>
                        <a href="#" class="btn bt1">Details</a>
                        <div class="clear "></div>
                    </div>
                </div>
                <div class="tab_cont" id="tabs-3">
                    <img src="{{asset('frontend')}}/images/page1_img4.jpg" alt="">
                    <div class="extra_wrapper">
                        <div class="text1">Rem psum dr sit amet. </div>
                        <p class="style1">Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.</p>
                        Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.
                        <a href="#" class="btn">Details</a>
                        <div class="clear "></div>
                    </div>
                    <div class="clear cl1"></div>
                    <img src="{{asset('frontend')}}/images/page1_img5.jpg" alt="">
                    <div class="extra_wrapper">
                        <div class="text1 tx1">Hem psuf abr sit dmety. </div>
                        Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi. 
                        <div class="clear"></div>
                        <a href="#" class="btn bt1">Details</a>
                        <div class="clear "></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="grid_4">
            <div class="newsletter_title">NewsLetter </div>
            <div class="n_container">
                <form id="newsletter">
                    <div class="success">Your subscribe request has been sent!</div>
                    <div class="text1">Sign up to receive our newsletters </div>
                    <label class="email">
                    <input type="email" value="email address" >
                    <span class="error">*This is not a valid email address.</span>
                    </label> 
                    <div class="clear"></div>
                    <a href="#" class="" data-type="submit"></a> 
                </form>
                <ul class="list">
                    <li><a href="#">Fgo psu dr sit amek </a></li>
                    <li><a href="#">Sem psum dr sit ametre </a></li>
                    <li><a href="#">Rame sum dr sit ame </a></li>
                    <li><a href="#">Bem psum dr sit ameteko </a></li>
                    <li><a href="#">Nem dsum dr sit amewas </a></li>
                    <li><a href="#">Vcem psum dr sit </a></li>
                    <li><a href="#">Zdfem psum dr sittr amewe </a></li>
                </ul>
            </div>
        </div> --}}
        <div class="clear"></div>
    </div>
</div>



@endsection