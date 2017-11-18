@extends('layouts.admin')

@section('title')

    <h1>Create a new work</h1>

@endsection

@section('style')
    <link rel="stylesheet" href="/css/bootstrap-stars.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">
    <!-- Date & Time Picker CSS -->
    <link rel="stylesheet" href="/css/datepicker.css" type="text/css" />
    <link rel="stylesheet" href="/css/timepicker.css" type="text/css" />
    <link rel="stylesheet" href="/css/daterangepicker.css" type="text/css" />

@stop

@section('content')



    @include('layouts.tinyeditor')


    <div class="row">


        <div class="col-sm-6">
            {!! Form::open(['method'=>'POST', 'action'=> 'AdminWorksController@store', 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('company', 'Company:') !!}
                {!! Form::text('company', null, ['class'=>'form-control'])!!}
            </div>

            {{--<div class="form-group">--}}
            {{--{!! Form::label('category_id', 'Category:') !!}--}}
            {{--{!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control'])!!}--}}
            {{--</div>--}}

            <div class="form-group">
                {!! Form::label('workscategories_id', 'Works Category:') !!}
                {!! Form::select('workscategories_id', [''=>'Choose Categories']+$workscategories , null, ['class'=>'form-control'])!!}
            </div>




            <div class="form-group">
                {!! Form::label('workstag_list','Works Tags') !!}
                {!! Form::select('workstag_list[]',$workstags,null,['class'=>'form-control js-example-basic-multiple js-states','multiple'=>'multiple']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('date','Date') !!}
                {!! Form::text('date',null,['class'=>'form-control tleft mnth']) !!}
            </div>



            <div class="form-group">
                {!! Form::label('star','Stars') !!}
                {!! Form::select('star',['1' => '1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'],null,['class'=>'form-control  js-states','id'=>'stars']) !!}
            </div>





        </div>


        <div class="col-sm-6">

            <div class="form-group">
                {!! Form::label('url', 'URL:') !!}
                {!! Form::text('url', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('thumb', 'Thumbnail:') !!}
                <div class="input-group" >
               <span class="input-group-btn">
                 <a id="lfm1" data-input="thumbnail" data-preview="holder1" class="btn btn-primary">
                   <i class="fa fa-picture-o"></i> Choose
                 </a>
               </span>
                    {!! Form::text('thumbnail', null,['class'=>'form-control ','id'=>'thumbnail'])!!}

                </div>
                <img id="holder1" style="margin-top:15px;max-height:100px;">


            </div>


            <div class="form-group">
                {!! Form::label('banner', 'Banner:') !!}
                <div class="input-group" >
               <span class="input-group-btn">
                 <a id="lfm" data-input="banner" data-preview="holder" class="btn btn-primary">
                   <i class="fa fa-picture-o"></i> Choose
                 </a>
               </span>
                    {!! Form::text('banner', null,['class'=>'form-control ','id'=>'banner'])!!}

                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">


            </div>
            {{--<div height="50" class="dropzone dropzone-previews" id="my-awesome-dropzone"></div>--}}

            <div class="form-group">
                {!! Form::label('worksfeatures','Feature Photo') !!}
                {!! Form::file('worksfeatures[]', ['class'=>'form-control ','multiple'=>'multiple','id'=>'file'])!!}




                {{--<div class="input-group" >--}}
                {{--<span class="input-group-btn">--}}
                {{--<a  data-input="thumbnail" data-preview="holder" class="btn btn-primary">--}}
                {{--<i class="fa fa-picture-o"></i> Choose--}}
                {{--</a>--}}
                {{--</span>--}}
                {{--{!! Form::file('feature[]', ['class'=>'form-control ','multiple'=>'multiple','id'=>'thumbnail'])!!}--}}
                {{--<input id="thumbnail" class="form-control" type="text" name="img">--}}
            </div>


            {{--{!! Form::file('img[]', ['multiple'=>'multiple','class'=>'form-control'])!!}--}}
            {{--<input type="file" class="form-control" name="img[]" id="img" multiple>--}}
        </div>





    </div>

    <div class="col-sm-12">

        <div class="form-group">
            {!! Form::label('intro', 'Intro:') !!}
            {!! Form::textarea('intro', null, ['class'=>'form-control filemanager','rows'=>'10'])!!}
        </div>


    </div>

    <div class="col-sm-12">

        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control filemanager','rows'=>'10'])!!}
        </div>


    </div>


    <div class="col-sm-12 text-center">

        <div class="form-group">
            {!! Form::submit('Create Work', ['class'=>'btn btn-primary ']) !!}
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
    <script src="/js/jquery.barrating.min.js" type="text/javascript"></script>
    <!-- Date & Time Picker JS -->
    <script type="text/javascript" src="/js/moment.js"></script>
    <script type="text/javascript" src="/js/datepicker.js"></script>
    <script type="text/javascript" src="/js/timepicker.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="/js/daterangepicker.js"></script>

        <script type="text/javascript">
            $(function() {
                $('#stars').barrating({
                    theme: 'bootstrap-stars'
                });
            });

        </script>
    <script>
        $(function(){
            $('.mnth').datepicker({
                autoclose: true,
                minViewMode: 1,
                format: "mm/yyyy"
            });
        });
    </script>
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
                placeholder: "Add Work Tags ",
                allowClear: true,
                width: '100%'
            });
        });
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        var domain = "";
        $('#lfm').filemanager('image', {prefix: domain});
        $('#lfm1').filemanager('image', {prefix: domain});
    </script>
    {{--<script>--}}
        {{--$('#lfm2').filemanager('image');--}}
    {{--</script>--}}

@stop