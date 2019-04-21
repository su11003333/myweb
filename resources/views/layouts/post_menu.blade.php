<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{url('/')}}" class="standard-logo" data-dark-logo="{{asset('./images/logo-dark.png')}}"><img src="{{asset('./images/logo.png')}}" alt="Canvas Logo"></a>
                <a href="{{url('/')}}" class="retina-logo" data-dark-logo="{{asset('./images/logo-dark@2x.png')}}"><img src="{{asset('./images/logo@2x.png')}}" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li><a href="{{route('home.aboutme')}}"><div>About Me</div></a>
                    <li><a href="{{route('home.aboutweb')}}"><div>About Here</div></a>
                    <li><a href="{{route('home.posts')}}"><div>Posts</div></a>

                    </li>
                    <li><a href="{{route('home.works')}}"><div>Portfolio</div></a>


                    {{--<li class="mega-menu"><a href="#"><div>Pages</div></a>--}}
                        {{--<div class="mega-menu-content style-2 clearfix">--}}
                            {{--<ul class="mega-menu-column col-md-3">--}}
                                {{--<li class="mega-menu-title"><a href="#"><div>Introduction</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="about.html"><div>About Us</div></a></li>--}}
                                        {{--<li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>--}}
                                        {{--<li><a href="about-me.html"><div>About Me</div></a></li>--}}
                                        {{--<li><a href="team.html"><div>Team Members</div></a></li>--}}
                                        {{--<li><a href="jobs.html"><div>Careers</div></a></li>--}}
                                        {{--<li><a href="side-navigation.html"><div>Side Navigation</div></a></li>--}}
                                        {{--<li><a href="page-submenu.html"><div>Page Submenu</div></a></li>--}}
                                        {{--<li><a href="sitemap.html"><div>Sitemap</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<ul class="mega-menu-column col-md-3">--}}
                                {{--<li class="mega-menu-title"><a href="#"><div>Utility</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="services.html"><div>Services - Layout 1</div></a></li>--}}
                                        {{--<li><a href="services-2.html"><div>Services - Layout 2</div></a></li>--}}
                                        {{--<li><a href="services-3.html"><div>Services - Layout 3</div></a></li>--}}
                                        {{--<li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>--}}
                                        {{--<li><a href="faqs-2.html"><div>FAQs - Layout 2</div></a></li>--}}
                                        {{--<li><a href="faqs-3.html"><div>FAQs - Layout 3</div></a></li>--}}
                                        {{--<li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>--}}
                                        {{--<li><a href="maintenance.html"><div>Maintenance Page</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<ul class="mega-menu-column col-md-3">--}}
                                {{--<li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="full-width.html"><div>Full Width</div></a></li>--}}
                                        {{--<li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>--}}
                                        {{--<li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                        {{--<li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                        {{--<li><a href="both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                        {{--<li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>--}}
                                        {{--<li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>--}}
                                        {{--<li><a href="blank-page.html"><div>Blank Page</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<ul class="mega-menu-column col-md-3">--}}
                                {{--<li class="mega-menu-title"><a href="#"><div>Miscellaneous</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="login-register.html"><div>Login/Register</div></a></li>--}}
                                        {{--<li><a href="login-register-2.html"><div>Login/Register - Style 2</div></a></li>--}}
                                        {{--<li><a href="login-register-3.html"><div>Login/Register - Style 3</div></a></li>--}}
                                        {{--<li><a href="login-1.html"><div>Login - Style 1</div></a></li>--}}
                                        {{--<li><a href="login-2.html"><div>Login - Style 2</div></a></li>--}}
                                        {{--<li><a href="404.html"><div>404 - Simple Layout</div></a></li>--}}
                                        {{--<li><a href="404-2.html"><div>404 - Parallax Image</div></a></li>--}}
                                        {{--<li><a href="404-3.html"><div>404 - HTML5 Video</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</li>--}}




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

                    @endif

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
                                    {{--<a href="#"><img src="{{asset('./images/shop/small/1.jpg')}}" alt="Blue Round-Neck Tshirt" /></a>--}}
                                {{--</div>--}}
                                {{--<div class="top-cart-item-desc">--}}
                                    {{--<a href="#">Blue Round-Neck Tshirt</a>--}}
                                    {{--<span class="top-cart-item-price">$19.99</span>--}}
                                    {{--<span class="top-cart-item-quantity">x 2</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="top-cart-item clearfix">--}}
                                {{--<div class="top-cart-item-image">--}}
                                    {{--<a href="#"><img src="{{asset('./images/shop/small/6.jpg')}}" alt="Light Blue Denim Dress" /></a>--}}
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
                {{--</div><!-- #top-cart end -->--}}

                <!-- Top Search
                ============================================= -->
                <div id="top-search">




                    <div class="fa fa-search" id="search_submit" class=""></div>



                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    {!! Form::open(['method'=>'Get','action'=>'SearchController@search','id'=>'searchkey']) !!}
                        {!! Form::text('searchKey',null,['placeholder'=>' Type &amp; Hit Enter..','id'=>'searchword','class'=>'form-control']) !!}

                    {!! Form::close() !!}
                </div><!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->