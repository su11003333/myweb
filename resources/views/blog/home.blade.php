@extends('layouts.post_maintemplate')


@section('content')

    <div id="posts" class="post-grid grid-container post-masonry grid-2 clearfix">

        @if(count($posts)>0)

            @foreach($posts as $post)

        <div class="entry clearfix">
            <div class="entry-image">
                <a href="{{route('home.post',$post->id)}}" ><img class="image_fade" src="{{$post->banner}}" alt="Standard Post with Image"></a>
            </div>
            <div class="entry-title">
                <h2><a href="blog-single.html">{{$post->title}}</a></h2>
            </div>
            <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i>{{$post->created_at}}</li>
                <li><a href="blog-single.html#comments"><i class="icon-comments"></i>{{count($post->comment)}}</a></li>
                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
            </ul>
            <div class="entry-content">



                 <a href="{{route('home.post',$post->id)}}" class="more-link">Read More</a>


            </div>
        </div>
            @endforeach

            @else
            <h1>There is no Post!!</h1>


        @endif


        {{--<div class="entry clearfix">--}}
            {{--<div class="entry-image">--}}
                {{--<div class="fslider" data-arrows="false" data-lightbox="gallery">--}}
                    {{--<div class="flexslider">--}}
                        {{--<div class="slider-wrap">--}}
                            {{--<div class="slide"><a href="images/blog/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/10.jpg" alt="Standard Post with Gallery"></a></div>--}}
                            {{--<div class="slide"><a href="images/blog/full/20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/20.jpg" alt="Standard Post with Gallery"></a></div>--}}
                            {{--<div class="slide"><a href="images/blog/full/21.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/21.jpg" alt="Standard Post with Gallery"></a></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="entry-title">--}}
                {{--<h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>--}}
            {{--</div>--}}
            {{--<ul class="entry-meta clearfix">--}}
                {{--<li><i class="icon-calendar3"></i> 24th Feb 2014</li>--}}
                {{--<li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21</a></li>--}}
                {{--<li><a href="#"><i class="icon-picture"></i></a></li>--}}
            {{--</ul>--}}
            {{--<div class="entry-content">--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>--}}
                {{--<a href="blog-single-small.html"class="more-link">Read More</a>--}}
            {{--</div>--}}
        {{--</div>--}}



        {{--<div class="entry clearfix">--}}
            {{--<div class="entry-image clearfix">--}}
                {{--<div class="portfolio-single-image masonry-thumbs col-5" data-big="1" data-lightbox="gallery">--}}
                    {{--<a href="images/blog/full/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/2.jpg" alt=""></a>--}}
                    {{--<a href="images/blog/full/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/3.jpg" alt=""></a>--}}
                    {{--<a href="images/blog/full/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/6-1.jpg" alt=""></a>--}}
                    {{--<a href="images/blog/full/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/6-2.jpg" alt=""></a>--}}
                    {{--<a href="images/blog/full/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/12.jpg" alt=""></a>--}}
                    {{--<a href="images/blog/full/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/12-1.jpg" alt=""></a>--}}
                    {{--<a href="images/blog/full/13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/13.jpg" alt=""></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="entry-title">--}}
                {{--<h2><a href="blog-single-thumbs.html">This is a Standard post with Masonry Thumbs Gallery</a></h2>--}}
            {{--</div>--}}
            {{--<ul class="entry-meta clearfix">--}}
                {{--<li><i class="icon-calendar3"></i> 3rd Mar 2014</li>--}}
                {{--<li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a></li>--}}
                {{--<li><a href="#"><i class="icon-picture"></i></a></li>--}}
            {{--</ul>--}}
            {{--<div class="entry-content">--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>--}}
                {{--<a href="blog-single-thumbs.html"class="more-link">Read More</a>--}}
            {{--</div>--}}
        {{--</div>--}}











    </div><!-- #posts end -->

@stop

@section('links')

    {{$posts->links()}}

@stop


@section('script')
    <style>
        .reply-text{
            display:none;
        }
    </style>
    <script>

        $(document).on("click", ".comment-reply-link", function(event){
            event.preventDefault();
            $(this).parent().parent('.comment-wrap').next('.reply-text').slideToggle();
        });
    </script>


@stop