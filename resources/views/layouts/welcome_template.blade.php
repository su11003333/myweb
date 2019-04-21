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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46014653-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-46014653-3');
    </script>


    <style>

        .SearchBar {
            display:block;
            margin-top:35px ;
            margin-bottom:35px;
            margin-left:0;
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
                width: 200px;
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
        .portfolio-desc span p{
            background:black;
            border-radius: 30px;
            display: inline-block;
            padding:0 8px;
            line-height: 1px;
            color:white;
            margin-bottom:10px;
        }
        /*.i-overlay.on-hover{*/
        /*filter:grayscale(1);*/
        /*opacity: 1;*/
        /*}*/

        /*.on-hover.i-overlay:hover{*/
        /*filter: none;*/
        /*opacity: 0;*/
        /*}*/

    </style>

    @yield('style')

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{--favicon--}}
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Document Title
    ============================================= -->
    <title>{{ config('app.name', 'Stray-design') }}</title>
    {{ Counter::count('welcome') }}

</head>

<body class="" data-loader="14">
@yield('sidepic')
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
                    <a href="{{url('/')}}" class="standard-logo" data-dark-logo="images/stray-designlogo.png"><img src="images/stray-designlogo.png" alt="Stray Design Logo"></a>
                    <a href="{{url('/')}}" class="retina-logo" data-dark-logo="images/stray-designlogo@2x.png"><img src="images/stray-designlogo@2x.png" alt="Stray Design Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                @include('layouts.wecome_menu')

            </div>

        </div>

    </header><!-- #header end -->

    <div class="clear"></div>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div id="section-about" class="container-fluid page-section clearfix">

                @yield('title')

                <div class="line topmargin-lg bottommargin-lg"></div>

               @yield('content1')

                <div class="line topmargin-lg bottommargin-lg"></div>

                @yield('content2')

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
                                    {!! Form::submit('Send Message', ['class'=>'button button-black noleftmargin topmargin-sm']) !!}
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

                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> 886 0988067665<br>

                                <abbr title="Email Address"><strong>Email:</strong></abbr> su11003333@gmail.com
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
<script>
    var myVideo =  iframe.getElementById('myVideo');
    myVideo.mute();
</script>
@include('message.error')
@include('message.message')
</body>
</html>