@extends('frontend.templates.default')
@section('content')







<!-- WORK -->
<section id="work" class="alternate arrow-down">
    <div class="container">
        <header class="text-center">
            <h1>OUR WORK</h1>
        </header>

        <div class="divider"><!-- lines divider --></div>

        <article>
            <p>
                Bacon ipsum dolor sit amet meatball shank pork chop capicola fatback pork loin sirloin flank. Andouille tongue corned beef rump pork loin shank meatball capicola turducken venison shankle kevin pancetta tri-tip boudin. Bacon ipsum dolor sit amet meatball shank pork chop capicola fatback pork loin sirloin flank.
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
                                <h3>PROJECT TITLE</h3>
                                <p>Image Popup</p>
                            </div>
                        </a>
                    </li>

                    <li class="isotope-item col-sm-6 col-md-4 video"><!-- item -->
                        <a class="popup-video" href="http://www.youtube.com/watch?v=kh29_SERH0Y?rel=0">
                            <img src="{{asset('frontend')}}/images/preview/content/portfolio/p2.jpg" class="img-responsive" alt="img" />
                            <div class="caption">
                                <i class="rounded fa fa-film"></i>
                                <h3>PROJECT TITLE</h3>
                                <p>Youtube Video</p>
                            </div>
                        </a>
                    </li>

                    <li class="isotope-item col-sm-6 col-md-4 video brand"><!-- item -->
                        <a class="popup-video" href="http://vimeo.com/23630702">
                            <img src="{{asset('frontend')}}/images/preview/content/portfolio/p3.jpg" class="img-responsive" alt="img" />
                            <div class="caption">
                                <i class="rounded fa fa-film"></i>
                                <h3>PROJECT TITLE</h3>
                                <p>Vimeo Video</p>
                            </div>
                        </a>
                    </li>

                    <li class="isotope-item col-sm-6 col-md-4 brand"><!-- item -->
                        <a class="external ajax-project" href="project-external-1.html">
                            <img src="{{asset('frontend')}}/images/preview/content/portfolio/p4.jpg" class="img-responsive" alt="img" />
                            <div class="caption">
                                <i class="rounded fa fa-link"></i>
                                <h3>PROJECT TITLE</h3>
                                <p>External Project 1</p>
                            </div>
                        </a>
                    </li>

                    <li class="isotope-item col-sm-6 col-md-4 brand"><!-- item -->
                        <a class="external ajax-project" href="project-external-2.html">
                            <img src="{{asset('frontend')}}/images/preview/content/portfolio/p5.jpg" class="img-responsive" alt="img" />
                            <div class="caption">
                                <i class="rounded fa fa-link"></i>
                                <h3>PROJECT TITLE</h3>
                                <p>External Project 2</p>
                            </div>
                        </a>
                    </li>

                    <li class="isotope-item col-sm-6 col-md-4 brand"><!-- item -->
                        <a class="external ajax-project" href="project-external-3.html">
                            <img src="{{asset('frontend')}}/images/preview/content/portfolio/p6.jpg" class="img-responsive" alt="img" />
                            <div class="caption">
                                <i class="rounded fa fa-link"></i>
                                <h3>PROJECT TITLE</h3>
                                <p>External Project 3</p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

        </div>

    </div>
</section>
<!-- /WORK -->

<!-- CALL NOW -->
<section class="util-row">
    <div class="container text-center">

        <header data-animation="bounceIn">
            <h1 class="no-text-transform italic">Only one step to work together</h1>
        </header>

        <article class="text-center">
            <h2>1-800-555-12345</h2>
            <p>CALL ME NOW - or - <a href="#contact" class="scrollTo">MESSAGE ME</a></p>
        </article>

    </div>
</section>
<!-- CALL NOW -->



<!-- SERVICES -->
<section id="services">

    <header class="text-center">
        <h1>SERVICES</h1>
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
                <li><!-- service 1 -->
                    <a href="#service-1" class="service yellow scrollTo">
                        <i class="icon-globe"></i>
                        <h3>Corporate Identity</h3>
                    </a>
                </li>

                <li><!-- service 2 -->
                    <a href="#service-2" class="service orange scrollTo">
                        <i class="icon-eye"></i>
                        <h3>Graphic Design</h3>
                    </a>
                </li>

                <li><!-- service 3 -->
                    <a href="#service-3" class="service mauve scrollTo">
                        <i class="fa fa-code"></i>
                        <h3>Development</h3>
                    </a>
                </li>

                <li><!-- service 4 -->
                    <a href="#service-4" class="service green scrollTo">
                        <i class="icon-videocam"></i>
                        <h3>Video</h3>
                    </a>
                </li>

                <li><!-- service default -->
                    <a href="#service-4" class="service scrollTo">
                        <i class="fa fa-smile-o"></i>
                        <h3>Default</h3>
                    </a>
                </li>
            </ul>

            <div class="services-nav">
                <a id="service-prev" href="#"><i class="fa fa-chevron-left"></i></a>
                <a id="service-next" href="#"><i class="fa fa-chevron-right"></i></a>
            </div>

        </div>
    </div>


    <!--
        BOOTSTRAP GRID USED
        http://getbootstrap.com/css/#grid
    -->



</section>
<!-- SERVICES -->



<!-- OUR PROCESS -->
<section id="process" class="alternate arrow-down">
    <div class="container">

        <header class="text-center animate_fade_in">
            <h1>Our Process</h1>
            <p>WE FIND SIMPLE SOLUTIONS TO COMPLEX PROBLEMS</p>
        </header>

        <div class="divider"><!-- lines divider --></div>

        <article class="animate_fade_in">

            <!-- Nav tabs [steps style] -->
            <div class="text-center">
                <ul class="nav nav-tabs bstrap-tabs">
                    <li class="active"><a href="#step1" data-toggle="tab"><i class="icon-calendar"></i>ANALYSIS</a></li>
                    <li><a href="#step2" data-toggle="tab"><i class="icon-pencil"></i>PLANNING</a></li>
                    <li><a href="#step3" data-toggle="tab"><i class="icon-beaker"></i>DEVELOPMENT</a></li>
                    <li><a href="#step4" data-toggle="tab"><i class="icon-thumbs-up"></i>DELIVERY</a></li>
                </ul>
            </div>

            <!-- Tab panes [steps style] -->
            <div class="tab-content bstrap-tabs">

                <!-- STEP 1 -->
                <div class="tab-pane fade in active" id="step1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. </p>
                    <p>Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam blandit felis non neque cursus aliquet. Morbi vel enim dignissim massa dignissim commodo vitae quis tellus. Nunc non mollis nulla. </p>
                    <p>Sed consectetur elit id mi consectetur bibendum. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Etiam suscipit nisl eget lorem pellentesque quis iaculis mi mattis. Aliquam sit amet purus lectus. Maecenas tempor ornare sollicitudin. </p>
                </div>

                <!-- STEP 2 -->
                <div class="tab-pane fade" id="step2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.  Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam blandit felis non neque cursus aliquet. Morbi vel enim dignissim massa dignissim commodo vitae quis tellus. Nunc non mollis nulla. </p>
                    <p>Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam blandit felis non neque cursus aliquet. Morbi vel enim dignissim massa dignissim commodo vitae quis tellus. Nunc non mollis nulla. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam blandit felis non neque cursus aliquet. Morbi vel enim dignissim massa dignissim commodo vitae quis tellus. Nunc non mollis nulla. </p>
                    <p>Sed consectetur elit id mi consectetur bibendum. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Etiam suscipit nisl eget lorem pellentesque quis iaculis mi mattis. Aliquam sit amet purus lectus. Maecenas tempor ornare sollicitudin.</p>
                </div>

                <!-- STEP 3 -->
                <div class="tab-pane fade" id="step3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. </p>
                    <p>Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam blandit felis non neque cursus aliquet. Morbi vel enim dignissim massa dignissim commodo vitae quis tellus. Nunc non mollis nulla. </p>
                    <p>Sed consectetur elit id mi consectetur bibendum. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Etiam suscipit nisl eget lorem pellentesque quis iaculis mi mattis. Aliquam sit amet purus lectus. Maecenas tempor ornare sollicitudin.</p>
                </div>

                <!-- STEP 4 -->
                <div class="tab-pane fade" id="step4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.  Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam blandit felis non neque cursus aliquet. Morbi vel enim dignissim massa dignissim commodo vitae quis tellus. Nunc non mollis nulla.  Sed consectetur elit id mi consectetur bibendum. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Etiam suscipit nisl eget lorem pellentesque quis iaculis mi mattis. Aliquam sit amet purus lectus. Maecenas tempor ornare sollicitudin. </p>
                </div>
            </div>

        </article>
    </div>
</section>
<!-- /OUR PROCESS -->



<!-- QUOTE -->
<section class="cover" style="background-image:url('assets/images/preview/slider/clouds.jpg')">
    <span class="overlay"></span>
    <div class="container text-center" data-animation="bounceIn">
        <q>We can't solve problems by using the same kind of thinking we used when we created them.</q>
        <cite>Albert Einstein</cite>
    </div>
</section>
<!-- /QUOTE -->


<!-- BLOG -->
<section id="quick-blog" class="alternate">
    <div class="container">

        <header class="text-center">
            <h1>BLOG</h1>
            <p>RECENT ENTRIES</p>
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



<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <header class="text-center">
            <h1>CONTACT</h1>
        </header>

        <div class="divider"><!-- lines divider --></div>

        <article>
            <p class="text-center big-paragraph">
                Drop us a line or just say <strong><em>Hello!</em></strong>
                <small class="fsize15 block">
                    Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. <br />
                    Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.
                </small>
            </p>
        </article>

        <article>

            <!-- Alert -->
            <div id="_sent_ok_" class="alert alert-success fade in fsize16 hide">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span id="_msg_txt_"><strong>Thank You!</strong> Your message successfully sent!</span>
            </div>

            <!-- Form -->
            <form id="contactForm" method="post" action="php/contact.php" class="white block form-inline">
                <div class="row">
                    <div class="col-md-4"><input required class="fullwidth" type="text" name="contact_name" id="contact_name" value="" placeholder="NAME *" title="Name" /></div>
                    <div class="col-md-4"><input required class="fullwidth" type="email" name="contact_email" id="contact_email" value="" placeholder="EMAIL *" title="Email" /></div>
                    <div class="col-md-4"><input class="fullwidth" type="text" name="contact_subject" id="contact_subject" value="" placeholder="SUBJECT" title="subject" /></div>
                </div>

                <div class="row">
                    <div class="col-md-12"><textarea required class="fullwidth" rows="5" name="contact_comment" id="contact_comment" placeholder="MESSAGE *"></textarea></div>
                    <div class="col-md-12">
                        <input type="hidden" name="captcha" id="captcha" value="" /><!-- hidden field - humans should not see it, only spam bots will see it -->
                        <button id="contact_submit" class="btn btn-default">SEND MESSAGE</button>
                    </div>
                </div>
            </form>

        </article>

    </div>
</section>
<!-- /CONTACT -->




<!-- GOOGLE MAP -->
<section id="googleMap" class="noindicator nomargin nopadding">
    <div class="container">
        <address class="animate_fade_in">
            <strong class="font-dosis fsize20">LET'S GET IN TOUCH</strong>
            <ul>
                <li class="address-sprite address">
                    Melbourne<br />
                    PO Box 21132<br />
                    Here Weare St, Melbourne<br />
                    Vivas 2355 Australia<br />
                </li>
                <li class="address-sprite phone">
                    Phone: 1-800-565-2390
                </li>
                <li class="address-sprite email">
                    support@yourname.com
                </li>
            </ul>
        </address>
    </div>

    <div id="gmap"></div>
</section>
<!-- GOOGLE MAP -->

@endsection