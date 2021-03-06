<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="{{asset('./css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('./css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('./css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('./css/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('./css/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('./css/selectWoo.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('./css/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('./css/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('./css/daterangepicker.css')}}" rel="stylesheet">

    @yield('style')

    <!-- Custom Theme Style -->
    <link href="{{asset('./css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('/')}}" class="site_title"> <span>STRAY DESIGN</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{ Auth::user()->photo->file }}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome</span>
                        <h2> {{ Auth::user()->name }} </h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            {{--<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu">--}}
                                    {{--<li><a href="index.html">Dashboard</a></li>--}}
                                    {{--<li><a href="index2.html">Dashboard2</a></li>--}}
                                    {{--<li><a href="index3.html">Dashboard3</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li><a><i class="fa fa-edit"></i> Posts <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('posts.index')}}">All Posts</a></li>
                                    <li><a href="{{route('posts.create')}}">Create New Posts</a></li>
                                    <li><a href="{{action('AdminCategoriesController@index')}}">All Categories</a></li>
                                    <li><a href="{{action('AdminTagsController@index')}}">All Tags</a></li>
                                    <li><a href="{{route('comments.index')}}">Comments</a></li>
                                    {{--<li><a href="form_validation.html">Form Validation</a></li>--}}
                                    {{--<li><a href="form_wizards.html">Form Wizard</a></li>--}}
                                    {{--<li><a href="form_upload.html">Form Upload</a></li>--}}
                                    {{--<li><a href="form_buttons.html">Form Buttons</a></li>--}}
                                </ul>
                            </li>


                            @if(Auth::user()->isAdmin())
                                <li><a><i class="fa fa-desktop"></i> Users <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{action('AdminUsersController@index')}}">All Users</a></li>
                                        <li><a href="{{action('AdminUsersController@create')}}">Create New Users</a></li>
                                        {{--<li><a href="typography.html">Typography</a></li>--}}
                                        {{--<li><a href="icons.html">Icons</a></li>--}}
                                        {{--<li><a href="glyphicons.html">Glyphicons</a></li>--}}
                                        {{--<li><a href="widgets.html">Widgets</a></li>--}}
                                        {{--<li><a href="invoice.html">Invoice</a></li>--}}
                                        {{--<li><a href="inbox.html">Inbox</a></li>--}}
                                        {{--<li><a href="calendar.html">Calendar</a></li>--}}
                                    </ul>
                                </li>
                            @endif





                            <li><a><i class="fa fa-bar-chart-o"></i>Works <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{action('AdminWorksController@index')}}">All Works</a></li>
                                    <li><a href="{{action('AdminWorksController@create')}}">Create New Work</a></li>
                                    <li><a href="{{action('AdminWorkstagsController@index')}}">Works Tags</a></li>
                                    <li><a href="{{action('AdminWorkscategoriesController@index')}}">Works Categories</a></li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-bar-chart-o"></i>Repos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{action('AdminPlaygroundController@index')}}">All Repos</a></li>
                                    <li><a href="{{action('AdminPlaygroundController@create')}}">Create New Repo</a></li>


                                </ul>
                            </li>
                            {{--<li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu">--}}
                                    {{--<li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>--}}
                                    {{--<li><a href="fixed_footer.html">Fixed Footer</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                    {{--<div class="menu_section">--}}
                        {{--<h3>Live On</h3>--}}
                        {{--<ul class="nav side-menu">--}}
                            {{--<li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu">--}}
                                    {{--<li><a href="e_commerce.html">E-commerce</a></li>--}}
                                    {{--<li><a href="projects.html">Projects</a></li>--}}
                                    {{--<li><a href="project_detail.html">Project Detail</a></li>--}}
                                    {{--<li><a href="contacts.html">Contacts</a></li>--}}
                                    {{--<li><a href="profile.html">Profile</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu">--}}
                                    {{--<li><a href="page_403.html">403 Error</a></li>--}}
                                    {{--<li><a href="page_404.html">404 Error</a></li>--}}
                                    {{--<li><a href="page_500.html">500 Error</a></li>--}}
                                    {{--<li><a href="plain_page.html">Plain Page</a></li>--}}
                                    {{--<li><a href="login.html">Login Page</a></li>--}}
                                    {{--<li><a href="pricing_tables.html">Pricing Tables</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu">--}}
                                    {{--<li><a href="#level1_1">Level One</a>--}}
                                    {{--<li><a>Level One<span class="fa fa-chevron-down"></span></a>--}}
                                        {{--<ul class="nav child_menu">--}}
                                            {{--<li class="sub_menu"><a href="level2.html">Level Two</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#level2_1">Level Two</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#level2_2">Level Two</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#level1_2">Level One</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                {{--<div class="sidebar-footer hidden-small">--}}
                    {{--<a data-toggle="tooltip" data-placement="top" title="Settings">--}}
                        {{--<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>--}}
                    {{--</a>--}}
                    {{--<a data-toggle="tooltip" data-placement="top" title="FullScreen">--}}
                        {{--<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>--}}
                    {{--</a>--}}
                    {{--<a data-toggle="tooltip" data-placement="top" title="Lock">--}}
                        {{--<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>--}}
                    {{--</a>--}}
                    {{--<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">--}}
                        {{--<span class="glyphicon glyphicon-off" aria-hidden="true"></span>--}}
                    {{--</a>--}}
                {{--</div>--}}
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Auth::user()->photo->file }}" alt=""> {{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                {{--<li><a href="javascript:;"> Profile</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:;">--}}
                                        {{--<span class="badge bg-red pull-right">50%</span>--}}
                                        {{--<span>Settings</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="javascript:;">Help</a></li>--}}
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                            </ul>
                        </li>

                        {{--<li role="presentation" class="dropdown">--}}
                            {{--<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">--}}
                                {{--<i class="fa fa-envelope-o"></i>--}}
                                {{--<span class="badge bg-green">6</span>--}}
                            {{--</a>--}}
                            {{--<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">--}}
                                {{--<li>--}}
                                    {{--<a>--}}
                                        {{--<span class="image"><img src="{{ Auth::user()->photo->file }}" alt="Profile Image" /></span>--}}
                                        {{--<span>--}}
                          {{--<span>John Smith</span>--}}
                          {{--<span class="time">3 mins ago</span>--}}
                        {{--</span>--}}
                                        {{--<span class="message">--}}
                          {{--Film festivals used to be do-or-die moments for movie makers. They were where...--}}
                        {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a>--}}
                                        {{--<span class="image"><img src="{{ Auth::user()->photo->file }}" alt="Profile Image" /></span>--}}
                                        {{--<span>--}}
                          {{--<span>John Smith</span>--}}
                          {{--<span class="time">3 mins ago</span>--}}
                        {{--</span>--}}
                                        {{--<span class="message">--}}
                          {{--Film festivals used to be do-or-die moments for movie makers. They were where...--}}
                        {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a>--}}
                                        {{--<span class="image"><img src="{{ Auth::user()->photo->file }}" alt="Profile Image" /></span>--}}
                                        {{--<span>--}}
                          {{--<span>John Smith</span>--}}
                          {{--<span class="time">3 mins ago</span>--}}
                        {{--</span>--}}
                                        {{--<span class="message">--}}
                          {{--Film festivals used to be do-or-die moments for movie makers. They were where...--}}
                        {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a>--}}
                                        {{--<span class="image"><img src="{{ Auth::user()->photo->file }}" alt="Profile Image" /></span>--}}
                                        {{--<span>--}}
                          {{--<span>John Smith</span>--}}
                          {{--<span class="time">3 mins ago</span>--}}
                        {{--</span>--}}
                                        {{--<span class="message">--}}
                          {{--Film festivals used to be do-or-die moments for movie makers. They were where...--}}
                        {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="text-center">--}}
                                        {{--<a>--}}
                                            {{--<strong>See All Alerts</strong>--}}
                                            {{--<i class="fa fa-angle-right"></i>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @include('message.error')
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>@yield('title')</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control" placeholder="Search for...">--}}
                                {{--<span class="input-group-btn">--}}
                      {{--<button class="btn btn-default" type="button">Go!</button>--}}
                    {{--</span>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">

                                         @yield('content')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Stray <a href="https://colorlib.com">Design</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->

<script src="{{asset('./js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('./js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('./js/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('./js/nprogress.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('./js/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('./js/icheck.min.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('./js/moment.min.js')}}"></script>
<script src="{{asset('./js/daterangepicker.js')}}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{asset('./js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{asset('./js/jquery.hotkeys.js')}}"></script>
<script src="{{asset('./js/prettify.js')}}"></script>
<!-- jQuery Tags Input -->
<script src="{{asset('./js/jquery.tagsinput.js')}}"></script>
<!-- Switchery -->
<script src="{{asset('./js/switchery.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('./js/selectWoo.full.min.js')}}"></script>
<!-- Parsley -->
<script src="{{asset('./js/parsley.min.js')}}"></script>
<!-- Autosize -->
<script src="{{asset('./js/autosize.min.js')}}"></script>
<!-- jQuery autocomplete -->
<script src="{{asset('./js/jquery.autocomplete.min.js')}}"></script>
<!-- starrr -->
<script src="{{asset('./js/starrr.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('./js/custom.min.js')}}"></script>


@yield('script')
</body>
</html>
