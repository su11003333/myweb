@extends('layouts.admin')


@section('title')
    <h1>Edit Tags</h1>
@endsection

@section('content')
    @include('message.message')
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">




                <div class="x_title">
                    <h2>Add New Category <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />

                    {!! Form::model($tag,['method'=>'PATCH','action'=>['AdminTagsController@update',$tag->id]]) !!}

                    <div class="form-group">

                        {!! Form::label('name','Name:') !!}
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
                    </div>


                    {!! Form::submit('Update Tag', ['class'=>'btn btn-primary col-sm-6']) !!}


                    {!! Form::close() !!}


                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminTagsController@destroy', $tag->id]]) !!}


                    {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-6']) !!}

                    {!! Form::close() !!}

                </div>
            </div>


            </div>
        </div>





    </div>

@stop


@section('script')

    <script type="text/javascript">

        $(".delete_confirm").submit(function(e){

            var delete_confirm_message = confirm ("Are you sure you want to delete!");

            if(delete_confirm_message){

                return true;

            }else{
                e.preventDefault();
                return false;

            }
        })

    </script>

@endsection