<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        .tv {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .tv .screen {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            margin: auto;
            opacity: 0;
            transition: opacity 0.5s;
        }
        .tv .screen.active {
            opacity: 1;
        }

    </style>

    <!-- Document Title
    ============================================= -->
    <title>{{ config('app.name', 'Stray Design') }}</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header dark full-header no-sticky">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{url('/')}}" class="standard-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo.png')}}" alt="Stray Design"></a>
                    <a href="{{url('/')}}" class="retina-logo" data-dark-logo="{{asset('images/logo-dark@2x.png')}}"><img src="{{asset('images/logo@2x.png')}}" alt="Stray Design"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->


            </div>

        </div>

    </header><!-- #header end -->

    <section id="slider" class="force-full-screen full-screen">

        <div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">

            <div class="container clearfix">
                <div class="slider-caption slider-caption-center">
                    <h2 data-animate="fadeInUp">OOPS!404</h2>
                    <p data-animate="fadeInUp" data-delay="200">你來錯地方了</p>

                </div>
            </div>


            <div class="tv">
                <div class="screen mute" id="tv"></div>
            </div>


            {{--<div class="video-wrap">--}}
                {{--<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>--}}
                    {{--<source src='images/videos/explore.mp4' type='video/mp4' />--}}
                    {{--<source src='images/videos/explore.webm' type='video/webm' />--}}
                {{--</video>--}}
                {{--<div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>--}}
            {{--</div>--}}

        </div>

    </section>

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2017 All Rights Reserved by Stray Design Inc.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i>Stray-design <span class="middot">&middot;</span> <i class="icon-headphones"></i>  <span class="middot">&middot;</span> <i class="icon-skype2"></i>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
<script>
    var tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/player_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var tv,
        playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
    var vid = [
            {'videoId': 'VdLGTgpJJ1w', 'startSeconds': 2, 'endSeconds': 12, 'suggestedQuality': 'hd720'},
            {'videoId': '8xsrNGNuCuw', 'startSeconds': 79, 'endSeconds': 86, 'suggestedQuality': 'hd720'},



        ],
        randomVid = Math.floor(Math.random() * vid.length),
        currVid = randomVid;

    $('.hi em:last-of-type').html(vid.length);

    function onYouTubePlayerAPIReady(){
        tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
    }

    function onPlayerReady(){
        tv.loadVideoById(vid[currVid]);
        tv.mute();
    }

    function onPlayerStateChange(e) {
        if (e.data === 1){
            $('#tv').addClass('active');
            $('.hi em:nth-of-type(2)').html(currVid + 1);
        } else if (e.data === 2){
            $('#tv').removeClass('active');
            if(currVid === vid.length - 1){
                currVid = 0;
            } else {
                currVid++;
            }
            tv.loadVideoById(vid[currVid]);
            tv.seekTo(vid[currVid].startSeconds);
        }
    }

    function vidRescale(){

        var w = $(window).width()+200,
            h = $(window).height()+200;

        if (w/h > 16/9){
            tv.setSize(w, w/16*9);
            $('.tv .screen').css({'left': '0px'});
        } else {
            tv.setSize(h/9*16, h);
            $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
        }
    }

    $(window).on('load resize', function(){
        vidRescale();
    });

    $('.hi span:first-of-type').on('click', function(){
        $('#tv').toggleClass('mute');
        $('.hi em:first-of-type').toggleClass('hidden');
        if($('#tv').hasClass('mute')){
            tv.mute();
        } else {
            tv.unMute();
        }
    });

    $('.hi span:last-of-type').on('click', function(){
        $('.hi em:nth-of-type(2)').html('~');
        tv.pauseVideo();
    });

</script>
</body>
</html>