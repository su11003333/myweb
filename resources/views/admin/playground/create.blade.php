@extends('layouts.admin')

@section('title')

    <h1>Create a new repo</h1>

@endsection

@section('style')

    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">

@stop

@section('content')



    @include('layouts.tinyeditor')


    <div class="row">


        <div class="col-sm-6">
            {!! Form::open(['method'=>'POST', 'action'=> 'PlayGroundController@store', 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control'])!!}
            </div>

            {{--<div class="form-group">--}}
            {{--{!! Form::label('category_id', 'Category:') !!}--}}
            {{--{!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control'])!!}--}}
            {{--</div>--}}

            <div class="form-group">
                {!! Form::label('github', 'Git URL:') !!}
                {!! Form::text('github', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('url', 'Example:') !!}
                {!! Form::text('url', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control'])!!}
            </div>





        </div>


        <div class="col-sm-6">




            <div class="form-group">
                {!! Form::label('banner', 'Banner:') !!}
                <div class="input-group" >
               <span class="input-group-btn">
                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                   <i class="fa fa-picture-o"></i> Choose
                 </a>
               </span>
                    {!! Form::text('banner', null,['class'=>'form-control ','id'=>'thumbnail'])!!}
                    {{--<input id="thumbnail" class="form-control" type="text" name="img">--}}
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">


            </div>
            {{--<div height="50" class="dropzone dropzone-previews" id="my-awesome-dropzone"></div>--}}




            {{--{!! Form::file('img[]', ['multiple'=>'multiple','class'=>'form-control'])!!}--}}
            {{--<input type="file" class="form-control" name="img[]" id="img" multiple>--}}
        </div>





    </div>

    <div class="col-sm-12">

        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>'10'])!!}
        </div>


    </div>

    <div class="col-sm-12"><hr></div>
    <div class="col-sm-12 text-center">

        <div class="form-group">
            @if (Route::has('login'))
                @if (Auth::user()->isAdmin())
                    {!! Form::submit('Create Posts', ['class'=>'btn btn-primary']) !!}
                @else
                    <div class="btn btn-danger">Guest cannot pass!</div>
                @endif
            @endif

        </div>


    </div>

    {!! Form::close() !!}


    {{--dropzone--}}
    {{--<div class="col-sm-12">--}}

    {{--{!! Form::open(['method'=>'POST','action'=>'AdminImgsController@store','class'=>'dropzone']) !!}--}}

    {{--<div class="form-group">--}}

    {{--{!! Form::label('name','Name:') !!}--}}
    {{--{!! Form::text('name',null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--{!! Form::submit('Create Users', ['class'=>'btn btn-primary']) !!}--}}
    {{--</div>--}}

    {{--{!! Form::close() !!}--}}
    {{--</div>--}}
    </div>

@stop

@section('script')
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>--}}
    {{--<script>--}}
    {{--Dropzone.autoDiscover = false;--}}
    {{--jQuery(document).ready(function() {--}}

    {{--$("#my-awesome-dropzone").dropzone({--}}
    {{--url: "/file/post"--}}
    {{--});--}}

    {{--});--}}
    {{--</script>--}}
    <script>

        $(document).on('click', '.browse', function(){
            var file = $(this).parent().parent().parent().find('#file');
            file.trigger('click');
        });
        $(document).on('change', '#file', function(){
            $(this).parent().find('#form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
        });

    </script>
    <script type="text/javascript">
        $(function() {
            $(".js-example-basic-multiple").select2({
                placeholder: "Add Tags ",
                allowClear: true,
                width: '100%'
            });
        });
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        var domain = "";
        $('#lfm').filemanager('image', {prefix: domain});
    </script>
    <script>
        $('#lfm2').filemanager('image');
    </script>

@stop