<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('./style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('./css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('./css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('./css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('./css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>@yield('title')</title>

</head>

<body class="stretched">
@include('message.message')
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
@include('layouts.post_menu')

@include('layouts.work_pagemenu')

<!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Blog</h1>
            <span>Our Latest News in Masonry Layout</span>
            {{--<ol class="breadcrumb">--}}
            {{--<li><a href="#">Home</a></li>--}}
            {{--<li class="active">Blog</li>--}}
            {{--</ol>--}}
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin col_last clearfix">

                    <!-- Posts
                    ============================================= -->
                        @yield('content')
                <div class="text-center">
                    @yield('links')
                </div>
                </div><!-- .postcontent end -->


                <!-- Sidebar
                ============================================= -->
                <div>

                    @include('layouts.leftside.leftside_main')
                </div>

<!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        @include('layouts.footer')
        <!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="{{asset('./js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('./js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>

@yield('script')
</body>
</html>