@extends('layouts.work_maintemplate')

@section('style')
    <style>
        .load_more{
            height: 100vh;
            width: 100vw;
            position:fixed;
            display:none;
            top:0;
            left:0;
            /*background: rgba(0,0,0,0.3);*/
            z-index: 999999;
            transition:all 0.5s;
            margin-top:100px;
        }
        .load_more h3{
            position:absolute;
            color:white;
            background:black;
            padding:10px 30px;

            top:50%;
            left:50%;
            transform:translate(-50%,-100%);
        }

        .load_more.active{
            display:block;
        }
        .cbp-l-caption-buttonLeft{
            background:white;
            color:black;
            font-weight: bold;
        }
        .cbp-l-caption-buttonRight{
            background:white;
            color:black;
            font-weight: bold;
        }
        .cbp-l-grid-masonry-projects-title{
            color:black;
        }
    </style>
@endsection

@section('page_title')
    <section id="page-title">

        <div class="container clearfix">
            <h1>Search {{count($works)+count($posts)}} Result</h1>
            {{--<span>Showcase of Our Awesome Works</span>--}}
            {{--<ol class="breadcrumb">--}}
            {{--<li><a href="#">Home</a></li>--}}
            {{--<li class="active">Portfolio</li>--}}
            {{--</ol>--}}
        </div>

    </section>
@endsection

@section('content')


    <div class="tabs clearfix" id="tab-3">

        <ul class="tab-nav tab-nav2 clearfix">
            <li><a href="#tabs-1">{{count($works)}} Portifolio</a></li>
            <li><a href="#tabs-2">{{count($posts)}} Posts</a></li>


        </ul>

        <div class="tab-container">

            <div class="tab-content clearfix" id="tabs-1">

                <div id="js-grid-lightbox-gallery" class="cbp" >
                    @if($works->count())

                        @foreach($works as $work)
                            <div class="cbp-item {{$work->workscategories->id}}">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{$work->banner}}" alt="">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">

                                                <a href="{{route('home.work',$work->id)}}" target="_blank" class=" cbp-l-caption-buttonRight" >More detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('home.work',$work->id)}}" target="_blank" class=" cbp-l-grid-masonry-projects-title" rel="nofollow">{{$work->title}}</a>
                                <div class="cbp-l-grid-masonry-projects-desc">{!! $work->intro !!}</div>
                            </div>


                            {{--<div class="cbp-item  {{$work->workscategories->id}} ">--}}
                            {{--<a href="{{url('/ajax-work-template/'.$work->id)}}" class="cbp-caption cbp-singlePageInline"  rel="nofollow">--}}
                            {{----}}
                            {{--<div class="cbp-caption-defaultWrap">--}}
                            {{--<img src="{{$work->banner}}" alt="">--}}
                            {{--</div>--}}
                            {{----}}

                            {{--<div class="cbp-caption-activeWrap">--}}
                            {{--<div class="cbp-l-caption-alignLeft">--}}
                            {{--<div class="cbp-l-caption-body">--}}
                            {{--<div class="cbp-l-caption-title">{{$work->title}}</div>--}}
                            {{--<div class="cbp-l-caption-desc">{!! $work->intro !!}</div>--}}
                            {{----}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</a>--}}
                            {{--</div>--}}

                        @endforeach




                    @endif



                </div>
                <div class="text-center">{{$works->links()}}</div>
            </div>
            {{--tab--}}
            <div class="tab-content clearfix" id="tabs-2">

                <div class="row">
                    {{----}}
                @if($posts->count())
                    @foreach($posts as $post)
                            <div class="col-md-6 bottommargin">

                                <div class="team team-list clearfix">
                                    <div class="team-image">
                                        <a href="{{route('home.post',$post->id)}}">
                                            <img src="{{$post->banner}}" >
                                        </a>

                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title"><a href="{{route('home.post',$post->id)}}"><h4>{{$post->title}}</h4></a></div>
                                        <div class="team-content">
                                            <p></p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            {{----}}
                        @endforeach
                    @else
                    <h1>No result</h1>

                    @endif








                </div>
                 {{--row--}}




            </div>
            {{--tab-content--}}


            </div>
        {{--tab-container--}}


        </div>




@stop

@section('links')



@stop


@section('script')

    {{--<script type="text/javascript" src="{{asset('js/cubemain1.js')}}"></script>--}}
    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$(window).scroll(fetchWorks);--}}

            {{--function fetchWorks(){--}}

                {{--var page =  $('#js-grid-lightbox-gallery').data('next-page');--}}
                {{--if(page !== null){--}}

                    {{--clearTimeout($.data(this, "scrollCheck"));--}}

                    {{--$.data(this,"scrollCheck", setTimeout(function(){--}}
                        {{--var myWrapper = document.getElementById('js-grid-lightbox-gallery');--}}
                        {{--var contentHeight = myWrapper.offsetHeight,--}}
                            {{--currentScrollPosition = window.pageYOffset,--}}
                            {{--actualScrolledHeight = currentScrollPosition + window.innerHeight;--}}


                        {{--if(actualScrolledHeight >= contentHeight){--}}
                            {{--$('.load_more').fadeIn('2000');--}}

                            {{--$.get(page,function(data){--}}
                                {{--console.log(page);--}}
                                {{--console.log(data.works);--}}
                                {{--$('#js-grid-lightbox-gallery').cubeportfolio('append',data.works);--}}

                                {{--$('#js-grid-lightbox-gallery').data('next-page',data.next_page);--}}
                                {{--$('.load_more').fadeOut('2000');--}}



                            {{--});--}}
                        {{--}--}}


                    {{--},350))--}}
                {{--}--}}
            {{--}--}}

        {{--});--}}
    {{--</script>--}}

    <script>
        var $j = jQuery.noConflict();
        $j(document).ready(function() {
            $j('.tab-nav li a').click(function() {

                console.log('mansory');
                var container = $j('#portfolio');

                container.imagesLoaded( function(){
                    container.masonry({
                        itemSelector : '.portfolio-item'
                    });
                });
            })
        });
    </script>




@stop