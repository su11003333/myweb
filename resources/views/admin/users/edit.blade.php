@extends('layouts.admin')



@section('title')
    <h1>Edit User</h1>
@endsection
@section('content')

    @include('message.error')


    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content">

                <span class="section">User Info</span>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

                        <img width="200" src="{{$user->photo?$user->photo->file:'/photo/default.png'}}"  class="img-responsive img-circle" alt="">
                        
                        <div class="form-group">

                            {!! Form::label('name','Name:') !!}
                            {!! Form::text('name',null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('email','Email:') !!}
                            {!! Form::email('email',null, ['class'=>'form-control uneditable-input','disabled']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('role_id','Role:') !!}
                            {!! Form::select('role_id',$roles,null, ['class'=>'form-control']) !!}
                        </div>



                    </div>




                    <div class="col-sm-6">


                        <div class="form-group">

                            {!! Form::label('gender','Gender:') !!}
                            {!! Form::select('gender',array(''=>'Choose option',0=>'Male',1=>'Female'),null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('photo_id','Photo:') !!}
                            {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
                        </div>



                        <div class="form-group">

                            {!! Form::label('is_active','Status:') !!}
                            {!! Form::select('is_active',array(1=>'Active',0=>'Not active'),null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('password','Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Enter your new password']) !!}


                        </div>

                    </div>
                    {{--rol-6--}}
                    <div class="col-sm-12"><hr></div>
                    <div class="col-lg-6 col-lg-offset-4 col-sm-6">

                            <div class="col-lg-3 col-sm-6 ">

                                {!! Form::submit('Update Users', ['class'=>'btn btn-primary']) !!}
                                {!! Form::close() !!}

                            </div>


                            <div class="col-lg-3 col-sm-6">

                                {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id],'class'=>'delete_confirm']) !!}
                                {!! Form::submit('Delete Users', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}

                            </div>





                    </div>
                </div>
                {{--row--}}
            </div>
            {{--content--}}
        </div>
    </div>




    {{--{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}--}}

    {{--<div class="form-group">--}}

    {{--{!! Form::label('name','Name:') !!}--}}
    {{--{!! Form::text('name',null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--{!! Form::submit('Create Users', ['class'=>'btn btn-primary']) !!}--}}
    {{--</div>--}}

    {{--{!! Form::close() !!}--}}



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