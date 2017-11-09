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

@section('content')


    <div class="clearfix">
        {{--<div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">--}}
            {{--<div class="cbp-l-filters-dropdownWrap">--}}
                {{--<div class="cbp-l-filters-dropdownHeader">Filter Gallery</div>--}}
                {{--<div class="cbp-l-filters-dropdownList">--}}
                    {{--<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>--}}
                    {{--@foreach($workscategories as $workscategory)--}}
                        {{--<div data-filter=".{{$workscategory->name}}" class="cbp-filter-item">{{$workscategory->name}}</div>--}}
                    {{--@endforeach--}}


                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div id="js-filters-lightbox-gallery2" class="cbp-l-filters-button cbp-l-filters-left">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
            @foreach($workscategories as $workscategory)

                <div data-filter=".{{$workscategory->id}}" class="cbp-filter-item">{{$workscategory->name}}</div>

            @endforeach
            {{--<div data-filter=".graphic" class="cbp-filter-item">Graphic</div>--}}
            {{--<div data-filter=".logos" class="cbp-filter-item">Logo</div>--}}
            {{--<div data-filter=".motion" class="cbp-filter-item">Motion</div>--}}
        </div>
    </div>

    <div id="js-grid-lightbox-gallery" class="cbp" data-next-page="{{$works->nextPageUrl()}}">
        @if($works)

            @foreach($works as $work)
                <div class="cbp-item {{$work->workscategories->id}}">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{$work->banner}}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="{{url('/ajax-work-template/'.$work->id)}}" class="cbp-singlePageInline cbp-l-caption-buttonLeft" rel="nofollow">Info</a>
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

    <div class="text-center load_more"><h3>Loading...</h3></div>

    {{--<div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button">--}}
        {{--<a href="{{url('/ajax-work-template/'.$work->id)}}" class="cbp-l-loadMore-link" rel="nofollow">--}}
            {{--<span class="cbp-l-loadMore-defaultText">LOAD MORE (<span class="cbp-l-loadMore-loadItems">4</span>)</span>--}}
            {{--<span class="cbp-l-loadMore-loadingText">LOADING...</span>--}}
            {{--<span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>--}}
        {{--</a>--}}
    {{--</div>--}}
@stop

@section('links')

    {{--{{ $works->nextPageUrl()}}--}}

@stop


@section('script')

    {{--<script type="text/javascript" src="{{asset('js/cubemain1.js')}}"></script>--}}
    <script>
        $(document).ready(function(){
            $(window).scroll(fetchWorks);

            function fetchWorks(){

                var page =  $('#js-grid-lightbox-gallery').data('next-page');
                if(page !== null){

                    clearTimeout($.data(this, "scrollCheck"));

                    $.data(this,"scrollCheck", setTimeout(function(){
                        var myWrapper = document.getElementById('js-grid-lightbox-gallery');
                        var contentHeight = myWrapper.offsetHeight,
                            currentScrollPosition = window.pageYOffset,
                            actualScrolledHeight = currentScrollPosition + window.innerHeight;


                        if(actualScrolledHeight >= contentHeight){
                            $('.load_more').fadeIn('2000');

                            $.get(page,function(data){
                                console.log(page);
                                console.log(data.works);
                               $('#js-grid-lightbox-gallery').cubeportfolio('append',data.works);

                               $('#js-grid-lightbox-gallery').data('next-page',data.next_page);
                               $('.load_more').fadeOut('2000');

//

                            });
                        }


                    },350))
                }
            }

        });
    </script>






@stop