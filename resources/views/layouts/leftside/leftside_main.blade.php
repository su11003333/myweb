<div class="sidebar nobottommargin clearfix">
    <div class="sidebar-widgets-wrap">

        {{--<div class="widget widget-twitter-feed clearfix">--}}

            {{--<h4>Twitter Feed</h4>--}}
            {{--<ul class="iconlist twitter-feed" data-username="envato" data-count="2">--}}
                {{--<li></li>--}}
            {{--</ul>--}}

            {{--<a href="#" class="btn btn-default btn-sm fright">Follow Us on Twitter</a>--}}

        {{--</div>--}}



        <div class="widget widget_links clearfix">

            <h4>Post Categories</h4>
            <ul>
                @if($categories->count())
                        @foreach($categories as $category)
                        <li><a href="{{route('search.category',$category->id)}}">{{$category->name}}</a></li>
                        @endforeach
                    @else

                    @endif

            </ul>

        </div>

        <div class="widget clearfix">

            <h4>Portfolio Carousel</h4>
            <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                <div class="oc-item">
                    <div class="iportfolio">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('./images/portfolio/4/3.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc center nobottompadding">
                            <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                        </div>
                    </div>
                </div>

                <div class="oc-item">
                    <div class="iportfolio">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('./images/portfolio/4/1.jpg')}}" alt="Open Imagination">
                            </a>
                            <div class="portfolio-overlay">
                                <a href="{{asset('./images/blog/full/1.jpg')}}" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-desc center nobottompadding">
                            <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="widget clearfix">

            <h4>Tag Cloud</h4>
            <div class="tagcloud">

                @if($tags->count())
                    @foreach($tags as $tag)
                        <a href="{{route('search.tag',$tag->id)}}">{{$tag->name}}</a>
                    @endforeach
                @else

                @endif


            </div>

        </div>

    </div>

</div>