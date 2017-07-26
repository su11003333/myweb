@extends('layouts.work')


@section('content')
    <h1>Todos</h1>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-3">
            <div class="col-sm-10">

                {!! Form::model($todo,['method'=>'PATCH','action'=>['TodosController@update',$todo->id]]) !!}

                <div class="form-group">

                    {!! Form::text('todo',$todo->todo, ['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="col-sm-2">

                <div class="form-group">
                    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                </div>

            </div>
            {!! Form::close() !!}
            {{--<form action="/create/todo" method="post">--}}

            {{--<input type="text" class="form-control" name="todo" placeholder="Create a new todo!">--}}
            {{--</form>--}}

        </div>
    </div>




@stop