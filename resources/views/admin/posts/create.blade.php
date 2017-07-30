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
                    {!! Form::select('category_id', [''=>'Choose Categories']+$category , null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('subcategory_id', 'Category:') !!}
                    {!! Form::select('subcategory_id', [''=>'Choose Categories']+$subcategory , null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('tag_list','Tags') !!}
                    {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control js-example-basic-multiple js-states','multiple'=>'multiple']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('feature', 'Photo:') !!}
                    {!! Form::file('feature', null,['class'=>'form-control'])!!}
                </div>

        </div>


        <div class="col-sm-6">


            <div class="form-group">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
            </div>


        </div>

        <div class="col-sm-12"><hr></div>
        <div class="col-sm-12 text-center">

            <div class="form-group">
                {!! Form::submit('Create Users', ['class'=>'btn btn-primary']) !!}
            </div>


        </div>

        {!! Form::close() !!}
    </div>

@stop

@section('script')
    <script type="text/javascript">
        $(function() {
            $(".js-example-basic-multiple").select2({
                placeholder: "Add Tags ",
                allowClear: true,
                width: '100%'
            });
        });
    </script>
@stop