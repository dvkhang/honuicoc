@extends('frontend.templates.default')
@section('content')

<!-- WORK -->
<section id="work" class="alternate arrow-down">
    <div class="container">
        <header class="text-center">
            <h1>Chào mừng tới Hồ Núi Cốc</h1>
        </header>

        <div class="divider"><!-- lines divider --></div>

        <article>
            <center><b><h4>Nơi tìm kiếm niềm vui trọn vẹn</h4></b></center>
            <p>
                Hồ Núi Cốc là một hồ nước nhân tạo được, đây là địa điểm được nhiều du khách lựa chọn cho kỳ nghĩ cuối tuần, hoặc những chuyến dã ngoại trong ngày. Hồ Núi Côc còn gắn liền với truyền thuyết về Chàng Cốc và nàng Công. Với cảnh quan thiên thiên hết sức tuyệt đẹp Hồ Núi Cốc được ví như một ”Hạ Long” thu nhỏ của Thái Nguyên.
            </p>
        </article>

        <div id="portfolio" class="text-center animate_fade_in">

            <!-- PORTFOLIO FILTER -->
            <div class="text-center">
                <ul class="nav nav-tabs bstrap-tabs isotope-filter" data-sort-id="isotope-list" data-option-key="filter">
                    <li data-option-value="*" class="active"><a href="#">ALL</a></li>
                    <li data-option-value=".image"><a href="#">IMAGES</a></li>
                    <li data-option-value=".brand"><a href="#">BRANDING</a></li>
                    <li data-option-value=".video"><a href="#">VIDEO</a></li>
                </ul>
            </div>
            <!-- /PORTFOLIO FILTER -->


            <div class="row">
                <ul class="sort-destination isotope" data-sort-id="isotope-list">

                    <li class="isotope-item col-sm-6 col-md-4 image"><!-- item -->
                        <a class="popup-image" href="{{asset('frontend')}}/images/preview/slider/1.jpg">
                            <img src="{{asset('frontend')}}/images/preview/content/portfolio/p1.jpg" class="img-responsive" alt="img" />
                            <div class="caption">
                                <i class="rounded fa fa-camera"></i>
                                <h3>Văn Hóa</h3>
                                <p>Image Popup</p>
                            </div>
                        </a>
                    </li>

                    <li class="isotope-item col-sm-6 col-md-4 video"><!-- item -->
                        <a class="popup-video" href="http://www.youtube.com/watch?v=kh29_SERH0Y?rel=0">
                            <img src="{{asset('frontend')}}/images/preview/content/portfolio/p2.jpg" class="img-responsive" alt="img" />
                            <div class="caption">
                                <i class="rounded fa fa-film"></i>
                                <h3>Sinh Thái</h3>
                                <p>Youtube Video</p>
                            </div>
                        </a>
                    </li>

                    <li class="isotope-item col-sm-6 col-md-4 video brand"><!-- item -->
                        <a class="popup-video" href="http://vimeo.com/23630702">
                            <img src="{{asset('frontend')}}/images/preview/content/portfolio/p3.jpg" class="img-responsive" alt="img" />
                            <div class="caption">
                                <i class="rounded fa fa-film"></i>
                                <h3>Giải Trí</h3>
                                <p>Vimeo Video</p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

        </div>

    </div>
</section>
<!-- /WORK -->


<!-- SERVICES -->
<section id="services">

    <header class="text-center">
        <h1>GIÁ VÉ</h1>
    </header>

    <div class="divider"><!-- lines divider --></div>

    <div class="inner-cover" style="background-image:url('assets/images/preview/slider/3.jpg')">

        <!--
            Optional - raster or overlay backgrounds, for brighten images.
            <span class="raster"></span>

            Default overlay: black, opacity 0.5
            Gray overlay: #212121 , opacity 0.9
            Remove 'gray' class for default overlay

            <span class="overlay gray"></span>
        -->
        <span class="overlay gray"></span>

        <div class="container text-center">

            <ul class="services animate_from_bottom">
                @foreach($tickets as $ticket)
                    <li><!-- service 1 -->
                        <a href="#service-1" class="service yellow scrollTo">
                            @if($ticket->getMedia()->isEmpty()== false)
                            <img src="{{asset($ticket->getMedia()[0]->getUrl())}}" height="120" width="120" alt="">
                            @endif
                            <h3>{{$ticket->classify}}</h3>
                            <p>{{$ticket->price}} VNĐ</p>
                        </a>
                    </li>
                @endforeach    
            </ul>
        </div>
    </div>
</section>
<!-- SERVICES -->


<!-- BLOG -->
<section id="quick-blog" class="alternate">
    <div class="container">

        <header class="text-center">
            <h1>Bài đăng</h1>
            <p>Bài viết gần đây</p>
        </header>

        <div class="divider"><!-- lines divider --></div>

        <article>
            <div class="row animate_fade_in">

                <!-- article -->
                @if($posts->isEmpty()== false)
                    @foreach($posts as $post)
                    <div class="col-md-4 quick-hover">
                        <div class="quick-item">
                            <figure class="media-preview"><!-- image -->
                                <img src="{{asset('frontend')}}/images/1x1.png" class="img-responsive" data-src="holder.js/360x200/#676767:#555555/auto/" alt="img" />
                            </figure>
                            <h4>{{$post->title}}l</h4>
                            <p>{{$post->summary}}</p>
                            <a href="{{url('post', ['id'=>$post->id])}}" class="btn btn-xs"><i class="fa fa-sign-out"></i> READ MORE</a>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </article>

        <div class="divider"><!-- lines divider --></div>

        <article class="text-center" data-animation="bounceIn">
            <a href="blog.html" class="plusNav" title="more from blog">+</a>
        </article>

    </div>
</section>
<!-- /BLOG -->

<!-- ABOUT -->
        <section id="about">
            <div class="container">
                <header class="text-center">
                    <h1>LIÊN HỆ VỚI CHÚNG TÔI</h1>
                </header>

                <div class="divider"><!-- lines divider --></div>

                <article class="text-center big-paragraph">
                    <p>BAN QUẢN LÝ KHU DU LỊCH VÙNG HỒ NÚI CỐC</p>
                </article>
                <article>
                    <div class="row text-left">

                        <!-- Passion -->
                        <div class="col-md-4">
                            <h3>Phạm Đức Toàn</h3>
                            <p>Trưởng ban</p>
                            <P>ĐTDĐ: 0912.477.999</P>
                            <P>
                                ĐTCQ: 0280.3825.782
                            </P>
                            <P>
                                Email: toanpd@thainguyen.gov.vn
                            </P>
                        </div>


                        <!-- Precision -->
                        <div class="col-md-4">
                            <h3>Nguyễn Văn Chiến</h3>
                            <p>Trưởng phòng HC - TH</p>
                            <P>ĐTDĐ: 0913.386.107</P>
                            <P>
                                ĐTCQ: 0280.3825.868
                            </P>
                            <P>
                                Email:  chiennv.bqlhnc.@gmail.com
                            </P>
                        </div>


                        <!-- Precision -->
                        <div class="col-md-4">
                            <h3>Nguyễn Thị Thanh Tâm: </h3>
                            <p>Trưởng phòng KH - NVDL</p>
                            <P>ĐTDĐ: 0915.176.777</P>
                            <P>
                                ĐTCQ: 0280.3825.868
                            </P>
                            <P>
                                Email:   lamnguyenthe.tn@gmail.com
                            </P>
                        </div>

                    </div>
                </article>

                <!-- curriculum vitae button  -->
                <!--
                    <article class="curriculum-vitae text-center">
                        <a href="#" class="plusNav">+</a> 
                        <p>curriculum vitae</p>
                    </article>
                -->

            </div>
        </section>
        <!-- /ABOUT -->





<!-- GOOGLE MAP -->
<section id="googleMap" class="noindicator nomargin nopadding">
    <div class="container">
        <address class="animate_fade_in">
            <strong class="font-dosis fsize20">Địa chỉ liên hệ</strong>
            <ul>
                <li class="address-sprite address">
                    Tên cơ quan: Ban quản lý khu du lịch vùng Hồ Núi Cốc<br />
                    Địa chỉ: Tân Thái - Đại Từ - Thái Nguyên<br />
                    <br />
                </li>
                <li class="address-sprite phone">
                    Điện thoại văn thư: 0280.3825.868 <br/>
                </li>
                <li class="address-sprite email">
                    toanpd@thainguyen.gov.vn
                </li>
            </ul>
        </address>
    </div>

    <div id="gmap"></div>
</section>
<!-- GOOGLE MAP -->

@endsection