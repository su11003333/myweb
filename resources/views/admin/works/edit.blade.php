@extends('layouts.admin')

@section('title')

    <h1>Edit a work</h1>

@endsection

@section('style')
    <link rel="stylesheet" href="/css/bootstrap-stars.css">
    <style>
        a.feature{
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            -ms-transition: all 1s ease;
            transition: all 1s ease;
        }
        a.feature:hover{

            -webkit-filter: brightness(70%);
            filter: brightness(70%);
        }

    </style>
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
            {!! Form::model($work,['method'=>'PATCH', 'action'=>[ 'AdminWorksController@update',$work->id], 'files'=>true]) !!}

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
                {!! Form::select('workscategories_id',$workscategories , null, ['class'=>'form-control'])!!}
            </div>



            <div class="form-group">
                {!! Form::label('workstag_list','Works Tags') !!}
                {!! Form::select('workstag_list[]',$workstags,$workstags_list,['class'=>'form-control js-example-basic-multiple js-states','multiple'=>'multiple']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('date','Date') !!}
                {!! Form::text('date',null,['class'=>'form-control tleft mnth']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('star','Stars') !!}
                {!! Form::select('star',['1' => '1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'],null,['class'=>'form-control  js-states','id'=>'stars']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('url', 'URL:') !!}
                {!! Form::text('url', null, ['class'=>'form-control'])!!}
            </div>


        </div>


        <div class="col-sm-6">


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
                <img id="holder1" style="margin-top:15px;max-height:100px;" src="{{$work->thumbnail}}">


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
                    {{--<input id="thumbnail" class="form-control" type="text" name="img">--}}
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$work->banner}}">


            </div>
            {{--<div height="50" class="dropzone dropzone-previews" id="my-awesome-dropzone"></div>--}}

            <div class="form-group">
                {!! Form::label('worksfeatures','Feature Photo') !!}
                {!! Form::file('worksfeatures[]', ['class'=>'form-control ','multiple'=>'multiple','id'=>'file'])!!}


                @if($worksfeatures)
                    @foreach($worksfeatures as $worksfeature)
                        <a class="feature" href="{{action('AdminWorksController@deletefeature',$worksfeature->id)}}" style="content:'sdfdsfdfwer';">
                            <div style="width:100px;height: 50px;overflow: hidden; margin-top:15px;display:inline-block">
                                <img src="{{$worksfeature->path}}" style="max-height:80px;" alt="">
                            </div>
                        </a>

                    @endforeach
                @endif
                {{--                <img src="{{$post->Features}}" alt="">--}}


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
            {!! Form::textarea('intro', null, ['class'=>'form-control','rows'=>'10'])!!}
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


        <div class="form-inline">

            @if (Route::has('login'))
                @if (Auth::user()->isAdmin())
                    <div class="form-group">
                        {!! Form::submit('Update Posts', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>



                    <div class="form-group">
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminWorksController@destroy',$work->id],'class'=>'delete_confirm']) !!}
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                @else
                    <div class="btn btn-danger">Guest cannot pass!</div>
                @endif
            @endif



        </div>



    </div>




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
    <script>
        $(function(){
            $('.mnth').datepicker({
                autoclose: true,
                minViewMode: 1,
                format: "mm/yyyy"
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $('#stars').barrating({
                theme: 'bootstrap-stars'
            });
        });

    </script>

    <script type="text/javascript">
        $(function() {
            $(".js-example-basic-multiple").select2({
                placeholder: "Add Tags ",
                allowClear: true,
                width: '100%',
                multiple: true
            });
        });
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        var domain = "";
        $('#lfm').filemanager('image', {prefix: domain});
        $('#lfm1').filemanager('image', {prefix: domain});
    </script>

    <script type="text/javascript">


        $(".delete_confirm").submit(function(e){

            var delete_confirm_message = confirm("Are you sure you want to delete this post?");

            if(delete_confirm_message){

                return true;

            }else{

                e.preventDefault();
                return false;
            }

        });
    </script>





@stop