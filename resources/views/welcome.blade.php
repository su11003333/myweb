<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />


    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />

    <!-- Media Agency Demo Specific Stylesheet -->
    <link rel="stylesheet" href="demos/media-agency/media-agency.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/et-line.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="demos/media-agency/fonts.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <style>

        .SearchBar {
            display:block;
            margin-top:35px ;
            margin-bottom:35px;
            margin-left:60px;
            margin-right:0;
        }
        .SearchBar.is-expanded .fa-search {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        .SearchBar.is-expanded input {
            width: 120px;
        }
        @media only screen and (max-width: 900px){
            .SearchBar.is-expanded input {
                width: 250px;
            }
            .SearchBar {
                margin-left:20px;
            }
        }

        .SearchBar .fa-search {
            background: black;
            color: white;
            line-height: 32px;
            font-size: 16px;
            width: 2em;
            text-align: center;
            margin: 0 0 0 -16px;
            display: inline-block;
            vertical-align: top;
            border-top-left-radius: 100%;
            border-top-right-radius: 100%;
            border-bottom-left-radius: 100%;
            border-bottom-right-radius: 100%;
            -webkit-transition: -webkit-transform 0.65s ease;
            -moz-transition: -webkit-transform 0.65s ease;
            transition: -webkit-transform 0.65s ease;
        }

        .SearchBar input {
            padding: 0;
            padding-left:10px;
            background: #eee;
            display: inline-block;
            border: 0;
            vertical-align: top;
            border-bottom-left-radius: 50px;
            border-top-left-radius: 50px;
            height: 32px;
            width: 0;
            -webkit-transition: width 0.65s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            -moz-transition: width 0.65s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transition: width 0.65s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>{{ config('app.name', 'Stray-design') }}</title>

</head>

<body class="" data-loader="14">

<div class="side-cover-wrapper full-screen visible-lg visible-md">
    <div class="fslider" data-speed="3000" data-pause="5000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
        <div class="flexslider" style="height: 100% !important;">
            <div class="slider-wrap" style="height: inherit !important;">
                <div class="slide full-screen force-full-screen" style="background: url('demos/media-agency/images/1.jpg') center right; background-size: cover; height: 100% !important;"></div>
                <div class="slide full-screen force-full-screen" style="background: url('demos/media-agency/images/2.jpg') center right; background-size: cover; height: 100% !important;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="nobottomborder no-sticky">

        <div id="header-wrap">

            <div class="container-fluid clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{url('/')}}" class="standard-logo" data-dark-logo="demos/media-agency/images/logo-media-dark.png"><img src="demos/media-agency/images/logo-media.png" alt="Canvas Logo"></a>
                    <a href="{{url('/')}}" class="retina-logo" data-dark-logo="demos/media-agency/images/logo-media-dark@2x.png"><img src="demos/media-agency/images/logo-media@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2">

                    <ul>
                        {{--<li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="200"><div>About</div></a></li>--}}
                        {{--<li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Services</div></a></li>--}}
                        <li><a href="{{route('home.posts')}}"  ><div>Posts</div></a></li>
                        <li><a href="{{route('home.works')}}"  ><div>Portfolio</div></a></li>
                        {{--<li><a href="#" data-scrollto="#section-portfolio" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Portfolio</div></a></li>--}}
                        {{--<li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Contact</div></a></li>--}}

                        @if (Route::has('login'))
                                @if (Auth::check())
                                    <li><a href="{{url('/home')}}" ><div>Admin</div></a></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                           Log Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @else
                                    <li><a href="{{url('/login')}}"  ><div>Login</div></a></li>
                                    <li><a href="{{url('/register')}}"  ><div>Register</div></a></li>
                                @endif
                        @endif

                        <li style="padding:0;">
                            <div class="SearchBar is-expanded">
                        {!! Form::open(['method'=>'Get','action'=>'SearchController@search','id'=>'searchkey']) !!}

                                {!! Form::text('searchKey',null,['placeholder'=>' Search','id'=>'searchword']) !!}
                                <div class="fa fa-search" id="search_submit" class=""></div>

                            {!! Form::close() !!}


                          </div>

                      </li>

                    </ul>

                    {{--<div class="header-social-set">--}}
                        {{--<a href="#" class="social-icon si-small si-borderless si-facebook">--}}
                            {{--<i class="icon-facebook"></i>--}}
                            {{--<i class="icon-facebook"></i>--}}
                        {{--</a>--}}

                        {{--<a href="#" class="social-icon si-small si-borderless si-twitter">--}}
                            {{--<i class="icon-twitter"></i>--}}
                            {{--<i class="icon-twitter"></i>--}}
                        {{--</a>--}}

                        {{--<a href="#" class="social-icon si-small si-borderless si-github">--}}
                            {{--<i class="icon-github"></i>--}}
                            {{--<i class="icon-github"></i>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <div class="clear"></div>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div id="section-about" class="container-fluid page-section clearfix">

                <div class="hero-headline bottommargin">
                    <h1>This is Stray Design,<br>Creative Media Agency,<br>Based in Stockholm.</h1>
                    <span></span>
                </div>

                <a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60" class="button  button-black nomargin">Get Custom Quote</a>

                <div class="line topmargin-lg bottommargin-lg"></div>

                <div id="section-services" class="page-section">

                    <h2 class="bottommargin">Services.</h2>

                    <div class="row clearfix">

                        <div class="col-md-6 bottommargin">
                            <div class="feature-box fbox-plain fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-et-desktop"></i></a>
                                </div>
                                <h3>TV Advertising</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 bottommargin">
                            <div class="feature-box fbox-plain fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-et-global"></i></a>
                                </div>
                                <h3>Global Presence</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 bottommargin">
                            <div class="feature-box fbox-plain fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-et-megaphone"></i></a>
                                </div>
                                <h3>Vast Broadcast</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>
                        <div class="col-md-6 bottommargin">
                            <div class="feature-box fbox-plain fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-et-tools"></i></a>
                                </div>
                                <h3>Careful Crafting</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>

                        <div class="clear bottommargin-sm"></div>

                        <div class="col-md-7">

                            <div class="accordion accordion-border clearfix">

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Our Mission</div>
                                <div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What we Do?</div>
                                <div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Our Company's Values</div>
                                <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                            </div>

                        </div>

                        <div class="col-md-5">

                            <h4>Clients Say.</h4>

                            <div class="fslider testimonial nopadding noborder noshadow" data-animation="slide" data-arrows="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                                <div class="testi-meta">
                                                    Steve Jobs
                                                    <span>Apple Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                                <div class="testi-meta">
                                                    Collis Ta'eed
                                                    <span>Envato Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                                <div class="testi-meta">
                                                    John Doe
                                                    <span>XYZ Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="line topmargin-lg bottommargin-lg"></div>

                <div id="section-portfolio" class="page-section">

                    <h2 class="bottommargin">Portfolio.</h2>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-3 portfolio-masonry mixed-masonry clearfix " >
                        @if($works->get(0))
                        <article class="portfolio-item pf-illustrations pf-icons wide">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="{{$works->get(0)->banner}}" alt="Open Imagination">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">{{$works->get(0)->title}}</a></h3>
                                <span>
                                    @foreach($works->get(0)->workstags as $tags)
                                    <a href="#">{{$tags->name}}</a>
                                    @endforeach
                                </span>
                            </div>
                        </article>
                        @endif
                        @if($works->get(1))
                        <article class="portfolio-item pf-illustrations">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="{{$works->get(1)->banner}}" alt="Locked Steel Gate">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">{{$works->get(0)->title}}</a></h3>
                                <span> @foreach($works->get(0)->workstags as $tags)
                                        <a href="#">{{$tags->name}}</a>
                                    @endforeach</span>
                            </div>
                        </article>
                            @endif
                            @if($works->get(2))
                        <article class="portfolio-item pf-illustrations pf-uielements">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="{{$works->get(2)->banner}}" alt="Mac Sunglasses">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">{{$works->get(0)->title}}</a></h3>
                                <span> @foreach($works->get(0)->workstags as $tags)
                                        <a href="#">{{$tags->name}}</a>
                                    @endforeach</span>
                            </div>
                        </article>
                            @endif


                            @if($works->get(3))
                        <article class="portfolio-item pf-illustrations pf-icons wide">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="{{$works->get(3)->banner}}" alt="Open Imagination">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">{{$works->get(0)->title}}</a></h3>
                                <span> @foreach($works->get(0)->workstags as $tags)
                                        <a href="#">{{$tags->name}}</a>
                                    @endforeach</span>
                            </div>
                        </article>
                            @endif

                            @if($works->get(4))
                        <article class="portfolio-item pf-illustrations pf-icons">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="{{$works->get(4)->banner}}" alt="Backpack Contents">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">{{$works->get(0)->title}}</a></h3>
                                <span> @foreach($works->get(0)->workstags as $tags)
                                        <a href="#">{{$tags->name}}</a>
                                    @endforeach</span>
                            </div>
                        </article>
                            @endif

                            @if($works->get(5))
                        <article class="portfolio-item pf-illustrations pf-icons">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="{{$works->get(5)->banner}}" alt="Open Imagination">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">{{$works->get(0)->title}}</a></h3>
                                <span> @foreach($works->get(0)->workstags as $tags)
                                        <a href="#">{{$tags->name}}</a>
                                    @endforeach</span>
                            </div>
                        </article>
                            @endif

                            @if($works->get(6))
                        <article class="portfolio-item pf-illustrations pf-icons">
                            <div class="portfolio-image imagescale">
                                <a href="#">
                                    <img src="{{$works->get(6)->banner}}" alt="Backpack Contents">
                                </a>
                                <div class="i-overlay on-hover" style="background: rgba(255,255,255,0.7);">
                                    <a href="#"><i class="icon-line-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">{{$works->get(0)->title}}</a></h3>
                                <span> @foreach($works->get(0)->workstags as $tags)
                                        <a href="#">{{$tags->name}}</a>
                                    @endforeach</span>
                            </div>
                        </article>
                            @endif


                    </div><!-- #portfolio end -->

                    <a href="{{route('home.works')}}"   class="button  button-black " style="margin-top:50px">More Portfolio</a>
                </div>


                <div class="line topmargin-lg bottommargin-lg"></div>

                <div id="section-contact" class="page-section">

                    <h2 class="bottommargin">Get in Touch.</h2>

                    <div class="row clearfix">

                        <div class="col-md-8">

                            <div class="contact-widget">

                                <div class="contact-form-result"></div>


                                {!! Form::open(['method'=>'POST','action'=>'welcomeController@store','class'=>'nobottommargin']) !!}

                                 <div class="form-process"></div>


                                        <div class="col_half">
                                            {!! Form::text('name',null, ['class'=>'sm-form-control border-form-control ','placeholder'=>'Name']) !!}
                                        </div>

                                        <div class="col_half col_last">
                                            {!! Form::email('email',null, ['class'=>'  sm-form-control border-form-control','placeholder'=>'E-mail']) !!}
                                        </div>

                                         <div class="clear"></div>

                                        <div class="col_full">
                                            {!! Form::text('subject',null, ['class'=>'sm-form-control border-form-control','placeholder'=>'Subject']) !!}
                                        </div>
                                        <div class="col_full">
                                            {!! Form::textarea('message',null, ['class'=>'sm-form-control border-form-control','placeholder'=>'Message']) !!}
                                        </div>
                                        <div class="col_full ">
                                            {!! NoCaptcha::display() !!}
                                        </div>

                                        <div class="col_full">
                                            {!! Form::submit('Sent Message', ['class'=>'button button-black noleftmargin topmargin-sm']) !!}
                                        </div>







                                    {!! Form::close() !!}



                            </div>

                        </div>

                        <div class="col-md-4">
                            <h4>Headquarters.</h4>

                            <div style="font-size: 16px; line-height: 1.7;">
                                {{--<address style="line-height: 1.7;">--}}
                                    {{--795 Folsom Ave, Suite 600<br>--}}
                                    {{--San Francisco, CA 94107<br>--}}
                                {{--</address>--}}

                                {{--<div class="clear topmargin"></div>--}}

                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
        <div id="copyrights" style="background-color:#111;">
            <div class="container-fluid">

                Copyrights &copy; Stray Design 2017 | All Rights Reserved

            </div>
        </div>
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
{!! NoCaptcha::renderJs() !!}
<script type="text/javascript">

    jQuery(window).load(function(){

        jQuery(window).resize(function() {
            SEMICOLON.portfolio.portfolioDescMargin();
        });

        var t = setTimeout(function(){ SEMICOLON.portfolio.portfolioDescMargin(); }, 200);

    });

</script>
<script>
//    $('.fa-search').on('click', function(){
//        $('.SearchBar').toggleClass('is-expanded');
//        $('#search_submit').toggleClass('readytosend');
//    });

</script>
<script>


        $( "#search_submit" ).click(function() {
            console.log($('#searchword').val())
            var searchword = $.trim($('#searchword').val());
            if( searchword ===''){
                alert("It can't be empty!");
                return false;
            }else{
                $( "#searchkey" ).submit();
            }

        });


</script>
@include('message.error')
@include('message.message')
</body>
</html>