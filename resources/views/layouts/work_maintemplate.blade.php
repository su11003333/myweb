<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700%7CRoboto:400,500,700%7CRoboto+Condensed%7CLato:400,700" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />


    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}" type="text/css">

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


    @yield('style')
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46014653-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-46014653-3');
    </script>


    <!-- Document Title
    ============================================= -->
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
   <!-- #header end -->
    @include('layouts.post_menu')

    <!-- Page Sub Menu
    ============================================= -->
   @include('layouts.work_pagemenu')
    <!-- #page-menu end -->

    <!-- Page Title
    ============================================= -->

    @yield('page_title')
    <!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Portfolio Filter
                ============================================= -->

                    @yield('content')

                <div class="text-center">
                    @yield('links')
                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <footer id="footer" class="dark">

        @include('layouts.footer')
        <!-- #copyrights end -->

        </footer><!-- #footer end -->
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
{{--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>--}}

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.cubeportfolio.js')}}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{--<script src="/js/jquery.jscroll.js"></script>--}}
<script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cubemain1.js')}}"></script>
{{--<script type="text/javascript">--}}
    {{--$('ul.pagination').hide();--}}
    {{--$(function() {--}}
        {{--$('.infinite-scroll').jscroll({--}}
            {{--autoTrigger: true,--}}
            {{--loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />', // MAKE SURE THAT YOU PUT THE CORRECT IMG PATH--}}
            {{--padding: 0,--}}
            {{--nextSelector: '.pagination li.active + li a',--}}
            {{--contentSelector: 'div.infinite-scroll',--}}
            {{--callback: function() {--}}
                {{--$('ul.pagination').remove();--}}

            {{--}--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
@yield('script')


</body>
</html>