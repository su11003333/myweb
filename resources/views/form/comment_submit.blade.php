<h3>Leave a <span>Comment</span></h3>

{!! Form::open(['method'=>'POST','action'=>'PostCommentsController@store','class'=>'clearfix','id'=>'commentform']) !!}

    {{--<div class="col_one_third">--}}
        {{--{!! Form::label('name','Name:') !!}--}}
        {{--{!! Form::text('name',null, ['class'=>'sm-form-control','size'=>'22','tabindex'=>'1','id'=>'name']) !!}--}}
    {{--</div>--}}

    {{--<div class="col_one_third">--}}
        {{--{!! Form::label('email','E-mail:') !!}--}}
        {{--{!! Form::text('email',null, ['class'=>'sm-form-control','size'=>'22','tabindex'=>'2','id'=>'email']) !!}--}}
    {{--</div>--}}

    {{--<div class="col_one_third col_last">--}}
        {{--{!! Form::label('email','E-mail:') !!}--}}
        {{--{!! Form::text('email',null, ['class'=>'sm-form-control','size'=>'22','tabindex'=>'2','id'=>'email']) !!}--}}
    {{--</div>--}}
    {{--<div class="clear"></div>--}}

    <input type="hidden" name="post_id" value="{{$post->id}}">


    <div class="col_full">
        {!! Form::label('body','Comment:') !!}
        {!! Form::textarea('body',null, ['class'=>'sm-form-control','cols'=>'58','rows'=>'7']) !!}
    </div>

    <div class="col_full nobottommargin">
        {!! Form::submit('Submit Comment', ['class'=>'button button-3d nomargin','id'=>'submit-button']) !!}
    </div>

{!! Form::close() !!}



{{--<form class="clearfix" action="#" method="post" id="commentform">--}}

    {{--<div class="col_one_third">--}}
        {{--<label for="author">Name</label>--}}
        {{--<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />--}}
    {{--</div>--}}

    {{--<div class="col_one_third">--}}
        {{--<label for="email">Email</label>--}}
        {{--<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />--}}
    {{--</div>--}}

    {{--<div class="col_one_third col_last">--}}
        {{--<label for="url">Website</label>--}}
        {{--<input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />--}}
    {{--</div>--}}

    {{--<div class="clear"></div>--}}

    {{--<div class="col_full">--}}
        {{--<label for="comment">Comment</label>--}}
        {{--<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>--}}
    {{--</div>--}}

    {{--<div class="col_full nobottommargin">--}}
        {{--<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>--}}
    {{--</div>--}}

{{--</form>--}}
