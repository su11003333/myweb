<ol class="commentlist clearfix">

    {{--<li class="comment even thread-even depth-1" id="li-comment-1">--}}

        {{--<div id="comment-1" class="comment-wrap clearfix">--}}

            {{--<div class="comment-meta">--}}

                {{--<div class="comment-author vcard">--}}

                    {{--<span class="comment-avatar clearfix">--}}
                    {{--<img alt='' src='{{$comment}}' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>--}}

                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="comment-content clearfix">--}}

                {{--<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>--}}

                {{--<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>--}}

                {{--<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>--}}

            {{--</div>--}}

            {{--<div class="clear"></div>--}}

        {{--</div>--}}


        {{--<ul class='children'>--}}

            {{--<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">--}}

                {{--<div id="comment-3" class="comment-wrap clearfix">--}}

                    {{--<div class="comment-meta">--}}

                        {{--<div class="comment-author vcard">--}}

															{{--<span class="comment-avatar clearfix">--}}
															{{--<img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="comment-content clearfix">--}}

                        {{--<div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>--}}

                        {{--<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}

                        {{--<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>--}}

                    {{--</div>--}}

                    {{--<div class="clear"></div>--}}

                {{--</div>--}}

            {{--</li>--}}

        {{--</ul>--}}

    {{--</li>--}}

    @foreach($comments as $comment)

    <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

        <div id="comment-2" class="comment-wrap clearfix">

            <div class="comment-meta">

                <div class="comment-author vcard">

                    <span class="comment-avatar clearfix">
                    <img alt='' src='{{$comment->file}}' class='avatar avatar-60 photo' height='60' width='60' /></span>

                </div>

            </div>

            <div class="comment-content clearfix">

                <div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>{{$comment->author}}</a><span><a href="#" title="Permalink to this comment">{{$comment->created_at->diffForHumans()}}</a></span></div>

                <p>{{$comment->body}}</p>

                <a class='comment-reply-link'   href=''#><i class="icon-reply"></i></a>
                

            </div>



            <div class="clear"></div>

        </div>

        <ul class='children reply-text' >

            <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

                <div id="comment-3" class="comment-wrap clearfix">

                    {!! Form::open(['method'=>'POST','action'=>'CommentRepliesController@createReply','class'=>'clearfix reply-bottom','id'=>'commentform']) !!}

                    <input type="hidden" name="comment_id" value="{{$comment->id}}">

                    <div class="col_full">
                        {!! Form::label('body','Reply:') !!}
                        {!! Form::textarea('body',null, ['class'=>'sm-form-control','cols'=>'58','rows'=>'1']) !!}
                    </div>

                    <div class="col_full nobottommargin">
                        {!! Form::submit('Submit Reply', ['class'=>'button button-3d nomargin','id'=>'submit-button']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>

            </li>

        </ul>




        @if(count($comment->replies)>0)

            @foreach($comment->replies as $reply)
        <ul class='children'>

            <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

                <div id="comment-3" class="comment-wrap clearfix">



                    <div class="comment-content clearfix">

                        <div class="comment-author"><a href='#' rel='external nofollow' class='url'>{{$reply->author}}</a><span><a href="#" title="Permalink to this comment">{{$reply->created_at->diffForHumans()}}</a></span></div>

                         <p>{{$reply->body}}</p>

                         {{--<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>--}}

                    </div>

                    <div class="clear"></div>

                </div>

            </li>

        </ul>
            @endforeach

        @endif




    </li>
    @endforeach

</ol>