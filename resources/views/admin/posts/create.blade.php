@extends('layouts.admin')

@section('title')
    <h1>Create a new post</h1>
@endsection

@section('content')


    <div class="row">

        <div class="col-sm-6">
                {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control'])!!}
                </div>

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('category_id', 'Category:') !!}--}}
                    {{--{!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control'])!!}--}}
                {{--</div>--}}

                <div class="form-group">
                    {!! Form::label('category_id', 'Category:') !!}
                    {!! Form::select('category_id', [''=>'Choose Categories'] , null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('feature', 'Photo:') !!}
                    {!! Form::file('feature', null,['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('body', 'Description:') !!}
                    {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
                </div>




                <div class="form-group">
                    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
        </div>
    </div>

@stop