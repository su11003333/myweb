@extends('layouts.admin')

@section('title')

    <h1>Edit a new post</h1>

@endsection

@section('style')
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

@stop

@section('content')



    @include('layouts.tinyeditor')


    <div class="row">


        <div class="col-sm-6">
            {!! Form::model($post,['method'=>'PATCH', 'action'=>[ 'AdminPostsController@update',$post->id], 'files'=>true]) !!}

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
                {!! Form::select('category_id',$category , null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('subcategory_id', 'Category:') !!}
                {!! Form::select('subcategory_id',$subcategory , null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('tag_list','Tags') !!}
                {!! Form::select('tag_list[]',$tags,$tag_list,['class'=>'form-control js-example-basic-multiple js-states','multiple']) !!}
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
                <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$post->banner}}">


            </div>
            {{--<div height="50" class="dropzone dropzone-previews" id="my-awesome-dropzone"></div>--}}

            <div class="form-group">
                {!! Form::label('feature','Feature Photo') !!}
                {!! Form::file('feature[]', ['class'=>'form-control ','multiple'=>'multiple','id'=>'file'])!!}


                @if($features)
                    @foreach($features as $feature)
                        <a class="feature" href="{{action('AdminPostsController@deletefeature',$feature->id)}}" style="content:'sdfdsfdfwer';">
                            <div style="width:100px;height: 50px;overflow: hidden; margin-top:15px;display:inline-block">
                                 <img src="{{$feature->path}}" style="max-height:80px;" alt="">
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
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>'10'])!!}
        </div>


    </div>

    <div class="col-sm-12"><hr></div>
    <div class="col-sm-12 text-center">


        <div class="form-inline">


            <div class="form-group">
                {!! Form::submit('Update Posts', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>



            <div class="form-group">
                {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id],'class'=>'delete_confirm']) !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>

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

    <script type="text/javascript">
        $(document).ready(function(){
            var data = {!! json_encode($tag_list) !!};

            console.log(data);

            var selection = [2,3,4];

            $(".js-example-basic-multiple").selectWoo({
                placeholder: "Add Tags ",
                allowClear: true,
                width: "100%",
                multiple: true

            });
//            $(".js-example-basic-multiple").selectWoo("val",selection).trigger('change');
//            $(".js-example-basic-multiple").select2("data", [{id: "CA", text: "California"},{id:"MA", text: "Massachusetts"}]);

        });


    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        var domain = "";
        $('#lfm').filemanager('image', {prefix: domain});
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