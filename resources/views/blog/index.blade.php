@extends('layouts.post_maintemplate')

@section('title')
    {{ config('app.name', 'Stray-design') }} | Post
@endsection

@section('page_title')
    <section id="page-title">

        <div class="container clearfix">
            <h1>Posts</h1>
            <span>Showcase of Our Awesome Works</span>
            {{--<ol class="breadcrumb">--}}
            {{--<li><a href="#">Home</a></li>--}}
            {{--<li class="active">Portfolio</li>--}}
            {{--</ol>--}}
        </div>

    </section>
@endsection

@section('content')

    <div class="single-post nobottommargin">

        <!-- Single Post
        ============================================= -->
        <div class="entry clearfix">

            <!-- Entry Title
            ============================================= -->
            <div class="entry-title">
                <h2>{{$post->title}}</h2>
            </div><!-- .entry-title end -->

            <!-- Entry Meta
            ============================================= -->
            <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> {{$post->created_at->diffForHumans()}}</li>
                <li><a href="#"><i class="icon-user"></i>{{$post->user->name}}</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
            </ul><!-- .entry-meta end -->

            <!-- Entry Image
            ============================================= -->
            <div class="entry-image">
                <a href="#"><img src="{{$post->banner}}" alt="Blog Single"></a>
            </div><!-- .entry-image end -->

            <!-- Entry Content
            ============================================= -->
            <div class="entry-content notopmargin">

                {!! $post->body !!}
                <!-- Post Single - Content End -->

                <!-- Tag Cloud
                ============================================= -->

                    @if($post->tags)
                <div class="tagcloud clearfix bottommargin">

                    @foreach($tags as $tag)

                        <a href="">{{$tag->name}}</a>
                    {{--<a href="#">general</a>--}}
                    {{--<a href="#">information</a>--}}
                    {{--<a href="#">media</a>--}}
                    {{--<a href="#">press</a>--}}
                    {{--<a href="#">gallery</a>--}}
                    {{--<a href="#">illustration</a>--}}
                        @endforeach
                </div><!-- .tagcloud end -->
                    @endif
                <div class="clear"></div>

                <!-- Post Single - Share
                ============================================= -->
                <div class="si-share noborder clearfix">
                    <span>Share this Post:</span>
                    <div>
                        <a href="#" class="social-icon si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-rss">
                            <i class="icon-rss"></i>
                            <i class="icon-rss"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-email3">
                            <i class="icon-email3"></i>
                            <i class="icon-email3"></i>
                        </a>
                    </div>
                </div><!-- Post Single - Share End -->

            </div>
        </div><!-- .entry end -->




        <!-- Post Navigation
        ============================================= -->
        <div class="post-navigation clearfix">
            @if($postpre)
            <div class="col_half nobottommargin">
                <a href="{{route('home.post',$postpre->id)}}">Prev-Post{{$postpre->title}}</a>
            </div>
            @endif
            @if($postnext)

            <div class="col_half col_last tright nobottommargin">
                <a href="{{route('home.post',$postnext->id)}}">Next-Post{{$postnext->title}}</a>
            </div>
                @endif

        </div><!-- .post-navigation end -->

        {{--<div class="line"></div>--}}

        <!-- Comments
							============================================= -->
        <div id="comments" class="clearfix">

            <h3 id="comments-title"><span>{{count($comments)}}</span> Comments</h3>

            <!-- Comments List
            ============================================= -->
           <!-- .commentlist end -->
            @if(count($comments)>0)

            @include('form.comment_display')

            @endif


            <!-- Comment Form
            ============================================= -->
            <div id="respond" class="clearfix">
            @if(Auth::check())
                @include('form.comment_submit')
            @endif
            </div><!-- #respond end -->

        </div><!-- #comments end -->

        <!-- Post Author Info
        ============================================= -->


        <div class="line"></div>

        <h4>Related Posts:</h4>

        <div class="related-posts clearfix">

            <div class="col_half nobottommargin">

                <div class="mpost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{asset('./images/blog/small/10.jpg')}}" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">This is an Image Post</a></h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 10th July 2014</li>
                            <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                        </ul>
                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                    </div>
                </div>

                <div class="mpost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{asset('./images/blog/small/20.jpg')}}" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">This is a Video Post</a></h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 24th July 2014</li>
                            <li><a href="#"><i class="icon-comments"></i> 16</a></li>
                        </ul>
                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                    </div>
                </div>

            </div>

            <div class="col_half nobottommargin col_last">

                <div class="mpost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{asset('./images/blog/small/21.jpg')}}" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">This is a Gallery Post</a></h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 8th Aug 2014</li>
                            <li><a href="#"><i class="icon-comments"></i> 8</a></li>
                        </ul>
                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                    </div>
                </div>

                <div class="mpost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{asset('./images/blog/small/22.jpg')}}" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">This is an Audio Post</a></h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 22nd Aug 2014</li>
                            <li><a href="#"><i class="icon-comments"></i> 21</a></li>
                        </ul>
                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Comments
        ============================================= -->
        <div id="comments" class="clearfix">

            {{--<h3 id="comments-title"><span><fb:comments-count href="http://themes.semicolonweb.com/html/coworker/blog-single-split.php"></fb:comments-count></span> Comments</h3>--}}

            <!-- Facebook Comments
            ============================================= -->
            <div class="fb-comments" data-width="100%" data-href="http://themes.semicolonweb.com/html/coworker/blog-single-split.php" data-numposts="5" data-colorscheme="light"></div>
            <!-- Facebook Comments end -->

        </div><!-- #comments end -->

    </div>

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