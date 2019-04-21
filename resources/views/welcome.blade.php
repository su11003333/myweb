@extends('layouts.welcome_template')

@section('style')

@endsection

@section('title')
    <div class="hero-headline bottommargin">
        <h1>This is the eternal journey <br>of myself from myself</h1>
        <span>In 2017, I build up this website in laravel. With passion and enthusiasm, I learn  programming from zero by self-study. It's an honor to share all achievement and pleasure with your.</span>
    </div>

@endsection

@section('sidepic')

    <div class="side-cover-wrapper full-screen visible-lg visible-md">
        <div class="fslider" data-speed="3000" data-pause="5000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
            <div class="flexslider" style="height: 100% !important;">
                <div class="slider-wrap" style="height: inherit !important;">
                    <div class="slide full-screen force-full-screen" style="background: url('images/index_side.jpg') center right; background-size: cover; height: 100% !important;"></div>
                    <div class="slide full-screen force-full-screen" style="background: url('images/index_side2.jpg') center right; background-size: cover; height: 100% !important;"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content1')
    <div id="section-services" class="page-section">

        <h2 class="bottommargin">Recent work.</h2>

        <div class="row clearfix">

            <div class="col ">
                <iframe  id="myVideo" src="https://www.youtube.com/embed/-EXvM8gS1VQ?rel=0&autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="portfolio-desc">
                <h3><a href="#">青林出版社-漫威雷神索爾童書影片預告</a></h3>

            </div>

        </div>

    </div>
@endsection

@section('content2')
    <div id="section-portfolio" class="page-section">

        <h2 class="bottommargin">About My Works.</h2>

        <!-- Portfolio Items
        ============================================= -->
        <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-3 portfolio-masonry mixed-masonry clearfix " >

            <article class="portfolio-item pf-illustrations pf-icons wide">
                <div class="portfolio-image imagescale">

                    <img src="images/index1.jpg" alt="Open Imagination">


                </div>
                <div class="portfolio-desc">
                    <h3>Backend</h3>
                    <span>
                                    <p>PHP</p>
                                    <p>Laravel</p>
                                </span>
                </div>
            </article>

            <article class="portfolio-item pf-illustrations">
                <div class="portfolio-image imagescale">

                    <img src="images/index2.jpg" alt="Locked Steel Gate">


                </div>
                <div class="portfolio-desc">
                    <h3>Frontend</h3>
                    <span>

                                    <p>Bootstrap</p>
                                    <p>Foundation</p>
                                    <p>Jquery</p>
                                    <p>Responsive</p>
                                    <p>GSAP</p>

                                </span>

                </div>
            </article>

            <article class="portfolio-item pf-illustrations pf-uielements">
                <div class="portfolio-image imagescale">

                    <img src="images/index3.jpg" alt="Mac Sunglasses">


                </div>
                <div class="portfolio-desc">
                    <h3>
                        Video effects
                    </h3>
                    <span>

                                    <p >Aftereffect</p>
                                    <p>Premiere</p>
                                    <p>Final Cut Pro</p>

                                </span>
                </div>
            </article>




            <article class="portfolio-item pf-illustrations pf-icons wide">
                <div class="portfolio-image imagescale">
                    {{--<a href="{{route('search.workscategory',5)}}">--}}
                    <img src="images/index4.jpg" alt="Open Imagination">
                    {{--</a>--}}

                </div>
                <div class="portfolio-desc">
                    <h3>
                        Graphic design
                    </h3>
                    <span>

                                    <p>Photoshop</p>
                                    <p>Illustrator</p>
                                    <p>Indesign</p>

                                </span>
                </div>
            </article>






        </div><!-- #portfolio end -->

        <a href="{{route('home.works')}}"   class="button  button-black " style="margin-top:50px">More Portfolio</a>
    </div>


    <div class="line topmargin-lg bottommargin-lg"></div>
@endsection

@section('script')

@endsection