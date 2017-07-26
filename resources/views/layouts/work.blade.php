<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <!-- Document Title
    ============================================= -->
    <title>Portfolio - 4 Columns Masonry Left Sidebar | Canvas</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{view('welcome')}}" class="standard-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo.png')}}" alt="Canvas Logo"></a>
                    <a href="{{view('welcome')}}" class="retina-logo" data-dark-logo="{{asset('images/logo-dark@2x.png')}}"><img src="{{asset('images/logo@2x.png')}}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li><a href="{{view('welcome')}}"><div>Home</div></a>
                            <ul>
                                <li><a href="index-corporate.html"><div>Home - Corporate</div></a>
                                    <ul>
                                        <li><a href="index-corporate.html"><div>Corporate - Layout 1</div></a></li>
                                        <li><a href="index-corporate-2.html"><div>Corporate - Layout 2</div></a></li>
                                        <li><a href="index-corporate-3.html"><div>Corporate - Layout 3</div></a></li>
                                        <li><a href="index-corporate-4.html"><div>Corporate - Layout 4</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="index-portfolio.html"><div>Home - Portfolio</div></a>
                                    <ul>
                                        <li><a href="index-portfolio.html"><div>Portfolio - Layout 1</div></a></li>
                                        <li><a href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a></li>
                                        <li><a href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a></li>
                                        <li><a href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li><a href="#"><div>Features</div></a>
                            <ul>
                                <li><a href="profile.html"><div><i class="icon-user"></i>User Profile</div></a></li>
                            </ul>
                        </li>

                        <li class="current mega-menu"><a href="#"><div>Portfolio</div></a>
                            <div class="mega-menu-content style-2 clearfix">
                                <ul class="mega-menu-column col-5">
                                    <li class="mega-menu-title"><a href="#"><div>Grids</div></a>
                                        <ul>
                                            <li><a href="portfolio-1.html"><div>1 Column</div></a></li>
                                            <li><a href="portfolio-2.html"><div>2 Columns</div></a></li>
                                            <li><a href="portfolio-3.html"><div>3 Columns</div></a></li>
                                            <li><a href="portfolio.html"><div>4 Columns</div></a></li>
                                            <li><a href="portfolio-5.html"><div>5 Columns</div></a></li>
                                            <li><a href="portfolio-6.html"><div>6 Columns</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-5">
                                    <li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
                                        <ul>
                                            <li><a href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a></li>
                                            <li><a href="portfolio-2-masonry.html"><div>2 Columns</div></a></li>
                                            <li><a href="portfolio-3-masonry.html"><div>3 Columns</div></a></li>
                                            <li><a href="portfolio-masonry.html"><div>4 Columns</div></a></li>
                                            <li><a href="portfolio-5-masonry.html"><div>5 Columns</div></a></li>
                                            <li><a href="portfolio-6-masonry.html"><div>6 Columns</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-5">
                                    <li class="mega-menu-title"><a href="#"><div>Loading Styles</div></a>
                                        <ul>
                                            <li><a href="portfolio.html"><div>jQuery Filter</div></a></li>
                                            <li><a href="portfolio-jpagination.html"><div>jQuery Pagination</div></a></li>
                                            <li><a href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a></li>
                                            <li><a href="portfolio-ajax.html"><div>AJAX In Page</div></a></li>
                                            <li><a href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a></li>
                                            <li><a href="portfolio-filter-styles.html"><div>Filter Styles</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-5">
                                    <li class="mega-menu-title"><a href="#"><div>Single Project</div></a>
                                        <ul>
                                            <li><a href="portfolio-single-extended.html"><div>Extended Item</div></a></li>
                                            <li><a href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a></li>
                                            <li><a href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a></li>
                                            <li><a href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a></li>
                                            <li><a href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a></li>
                                            <li><a href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mega-menu-column col-5">
                                    <li class="mega-menu-title"><a href="#"><div>Layouts</div></a>
                                        <ul>
                                            <li><a href="portfolio-nomargin.html"><div>Default</div></a></li>
                                            <li><a href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                            <li><a href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                            <li><a href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                            <li><a href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a></li>
                                            <li><a href="portfolio-parallax.html"><div>Parallax</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="shop.html"><div>Shop</div></a>
                            <ul>
                                <li><a href="shop.html"><div>4 Columns</div></a></li>
                                <li><a href="shop-3.html"><div>3 Columns</div></a>
                                    <ul>
                                        <li><a href="shop-3.html"><div>Full Width</div></a></li>
                                        <li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-2.html"><div>2 Columns</div></a>
                                    <ul>
                                        <li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-1.html"><div>1 Columns</div></a>
                                    <ul>
                                        <li><a href="shop-1.html"><div>Full Width</div></a></li>
                                        <li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>
                                <li><a href="shop-combination-filter.html"><div>Combination Filter</div></a></li>
                                <li><a href="shop-single.html"><div>Single Product</div></a>
                                    <ul>
                                        <li><a href="shop-single.html"><div>Full Width</div></a></li>
                                        <li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                        <li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                        <li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="cart.html"><div>Cart</div></a></li>
                                <li><a href="checkout.html"><div>Checkout</div></a></li>
                            </ul>
                        </li>
                        <li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
                            <div class="mega-menu-content clearfix">
                                <ul class="mega-menu-column col-5">
                                    <li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
                                    <li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
                                    <li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
                                    <li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
                                    <li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
                                    <li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
                                    <li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
                                    <li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>
                                    <li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>
                                </ul>
                                <ul class="mega-menu-column col-5">
                                    <li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
                                    <li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
                                    <li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
                                    <li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
                                    <li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
                                    <li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
                                    <li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
                                    <li><a href="component-editable.html"><div><i class="icon-edit"></i>Editable Fields</div></a></li>
                                    <li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>
                                </ul>
                                <ul class="mega-menu-column col-5">
                                    <li><a href="lists-panels.html"><div><i class="icon-th-list"></i>Lists &amp; Panels</div></a></li>
                                    <li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
                                    <li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
                                    <li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
                                    <li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
                                    <li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
                                    <li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
                                    <li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>
                                    <li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>
                                </ul>
                                <ul class="mega-menu-column col-5">
                                    <li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
                                    <li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
                                    <li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
                                    <li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
                                    <li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
                                    <li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
                                    <li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
                                    <li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>
                                    <li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>
                                </ul>
                                <ul class="mega-menu-column col-5">
                                    <li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
                                    <li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
                                    <li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
                                    <li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
                                    <li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
                                    <li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
                                    <li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
                                    <li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>
                                    <li><a href="component-typeahead.html"><div><i class="icon-type"></i>Input Typeahead</div></a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><div>Admin</div></a>
                            <ul>
                                <li><a href="{{url('/home')}}"><div><i class="icon-user"></i>Sign In</div></a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Top Cart
                    ============================================= -->
                    {{--<div id="top-cart">--}}
                        {{--<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>--}}
                        {{--<div class="top-cart-content">--}}
                            {{--<div class="top-cart-title">--}}
                                {{--<h4>Shopping Cart</h4>--}}
                            {{--</div>--}}
                            {{--<div class="top-cart-items">--}}
                                {{--<div class="top-cart-item clearfix">--}}
                                    {{--<div class="top-cart-item-image">--}}
                                        {{--<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="top-cart-item-desc">--}}
                                        {{--<a href="#">Blue Round-Neck Tshirt</a>--}}
                                        {{--<span class="top-cart-item-price">$19.99</span>--}}
                                        {{--<span class="top-cart-item-quantity">x 2</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="top-cart-item clearfix">--}}
                                    {{--<div class="top-cart-item-image">--}}
                                        {{--<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="top-cart-item-desc">--}}
                                        {{--<a href="#">Light Blue Denim Dress</a>--}}
                                        {{--<span class="top-cart-item-price">$24.99</span>--}}
                                        {{--<span class="top-cart-item-quantity">x 3</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="top-cart-action clearfix">--}}
                                {{--<span class="fleft top-checkout-price">$114.95</span>--}}
                                {{--<button class="button button-3d button-small nomargin fright">View Cart</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- #top-cart end -->

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Portfolio - Masonry</h1>
            <span>Showcase of Our Awesome Works in 4 Columns With Sidebar</span>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Portfolio</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                @yield('content')

            </div>
        </div>
    </section>
 <!-- #content end -->

    <!-- Footer
    ============================================= -->
    @include('layouts.footer')
    <!-- Footer
   ============================================= -->


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


@yield('script')

</body>
</html>