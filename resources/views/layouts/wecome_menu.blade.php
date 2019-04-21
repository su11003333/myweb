<nav id="primary-menu" class="style-2">

    <ul>
        {{--<li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="200"><div>About</div></a></li>--}}
        {{--<li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Services</div></a></li>--}}
        <li><a href="{{route('home.aboutme')}}"  ><div>About Me</div></a></li>
        <li><a href="{{route('home.aboutweb')}}"  ><div>About Here</div></a></li>
        <li><a href="{{route('home.posts')}}"  ><div>Posts</div></a></li>
        <li><a href="{{route('home.works')}}"  ><div>Portfolio</div></a></li>
        {{--<li><a href="#" data-scrollto="#section-portfolio" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Portfolio</div></a></li>--}}
        {{--<li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="60"><div>Contact</div></a></li>--}}

        @if (Route::has('login'))
            @if (Auth::check())
                <li><a href="{{url('/home')}}" ><div>Admin</div></a></li>
                {{--<li>--}}
                {{--<a href="{{ route('logout') }}" onclick="event.preventDefault();--}}
                {{--document.getElementById('logout-form').submit();">--}}
                {{--Log Out</a>--}}
                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--{{ csrf_field() }}--}}
                {{--</form>--}}
                {{--</li>--}}
            @else
                <li><a href="{{url('/login')}}"  ><div>Login</div></a></li>

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