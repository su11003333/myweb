@extends('layouts.work_maintemplate')

@section('style')
    <style>
        .portfolio-meta li span.workstag{

            width:auto;
            padding:3px 10px;
            margin:3px 2px;
            font-size:10px;
            font-weight: 100;
            border:solid 0.5px #ccc;
            border-radius: 30px;
            background-color:white;

        }
        .portfolio-overlay a {
            margin:0;
            transform: translate(-50%,-50%);
            font-size: 12px;
            background: black;
            color:white;
            transition: all 0.2s ease-in;
            font-weight:bold;
        }
        .portfolio-overlay a:hover {
            color:white;
            background-color: #0b0b0b;
        }

    </style>

@endsection

@section('title')
    {{ config('app.name', 'Stray-design') }} | POrtfolio
@endsection

@section('page_title')
    <section id="page-title">

        <div class="container clearfix">
            <h1>Portfolio</h1>
            <span>Showcase of Our Awesome Works</span>
            <span>{{ Counter::count('work_single') }}</span>
            {{--<ol class="breadcrumb">--}}
            {{--<li><a href="#">Home</a></li>--}}
            {{--<li class="active">Portfolio</li>--}}
            {{--</ol>--}}
        </div>

    </section>
@endsection



@section('content')

    <!-- Portfolio Single Gallery
					============================================= -->
    <div class="col_two_third portfolio-single-image nobottommargin">
        <div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
            <div class="flexslider">
                <div class="slider-wrap">
                    <div class="slide" data-thumb="{{$work->banner}}"><img src="{{$work->banner}}" alt=""></div>
                    @if(count($work->worksfeatures)>0)
                        @foreach($work->worksfeatures as $feature)
                    <div class="slide" data-thumb="{{$feature->path}}"><img src="{{$feature->path}}" alt=""></div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div><!-- .portfolio-single-image end -->

    <!-- Portfolio Single Content
    ============================================= -->
    <div class="col_one_third portfolio-single-content col_last nobottommargin">

        <!-- Portfolio Single - Description
        ============================================= -->
        <div class="fancy-title title-bottom-border">
            <h2>{{$work->title}}</h2>
        </div>
        <p>{!! $work->intro !!}</p>


        <!-- Portfolio Single - Description End -->



        <div class="line"></div>

        <!-- Portfolio Single - Meta
        ============================================= -->
        <ul class="portfolio-meta bottommargin">
            {{--<li><span><i class="icon-user"></i>Created by:</span> John Doe</li>--}}
            <li><span><i class="icon-calendar3"></i>Completed on:</span> {{$work->date}}</li>
            <li><span><i class="icon-link"></i>Client:</span> <a href="#">{{$work->company}}</a></li>

            @if(count($work->workstags)>0)
                <li><span><i class="icon-lightbulb"></i>Skills:</span><br>

                         @foreach($work->workstags as $tags)
                            <span class="workstag">{{$tags->name}}</span>
                        @endforeach


                </li>
            @endif
        </ul>
        <!-- Portfolio Single - Meta End -->

        <!-- Portfolio Single - Share
        ============================================= -->
        {{--<div class="si-share clearfix">--}}
            {{--<span>Share:</span>--}}
            {{--<div>--}}
                {{--<a href="#" class="social-icon si-borderless si-facebook">--}}
                    {{--<i class="icon-facebook"></i>--}}
                    {{--<i class="icon-facebook"></i>--}}
                {{--</a>--}}
                {{--<a href="#" class="social-icon si-borderless si-twitter">--}}
                    {{--<i class="icon-twitter"></i>--}}
                    {{--<i class="icon-twitter"></i>--}}
                {{--</a>--}}
                {{--<a href="#" class="social-icon si-borderless si-pinterest">--}}
                    {{--<i class="icon-pinterest"></i>--}}
                    {{--<i class="icon-pinterest"></i>--}}
                {{--</a>--}}
                {{--<a href="#" class="social-icon si-borderless si-gplus">--}}
                    {{--<i class="icon-gplus"></i>--}}
                    {{--<i class="icon-gplus"></i>--}}
                {{--</a>--}}
                {{--<a href="#" class="social-icon si-borderless si-rss">--}}
                    {{--<i class="icon-rss"></i>--}}
                    {{--<i class="icon-rss"></i>--}}
                {{--</a>--}}
                {{--<a href="#" class="social-icon si-borderless si-email3">--}}
                    {{--<i class="icon-email3"></i>--}}
                    {{--<i class="icon-email3"></i>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- Portfolio Single - Share End -->

    </div><!-- .portfolio-single-content end -->

    <div class="clear"></div>
    @if($work->url)
        <div class="cbp-l-inline-view-wrap" style="margin-bottom:50px;">
            <a href="{{$work->url}}" target="_blank" class="cbp-l-project-details-visit" style="background-color:black;">OPEN PROJECT</a>
        </div>
    @endif

    <div class="divider divider-center" style="margin-top:80px;"><i class="icon-circle"></i></div>
    {!! $work->body !!}

    <div class="divider divider-center" style="margin-top:80px;"><i class="icon-circle"></i></div>

    <!-- Related Portfolio Items
    ============================================= -->
    <h4>Related Projects:</h4>

    <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="30" data-nav="false" data-autoplay="5000" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="4">
        @if(count($relateworks)>0)
            @foreach( $relateworks as $relatework)
                <div class="oc-item">
                    <div class="iportfolio">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{$relatework->thumbnail}}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                {{--<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>--}}
                                <a href="{{route('home.work',$relatework->id)}}">More</a>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="{{route('home.work',$relatework->id)}}">{{$relatework->title}}</a></h3>
                            @if(count($relatework->workstags))
                                <span><a href="{{route('search.tag',$relatework->id)}}">{!! $relatework->intro !!}</a>
                            @endif

                        </div>
                    </div>
                </div>

            @endforeach
        @endif





    </div><!-- .portfolio-carousel end -->

    </div>


@endsection