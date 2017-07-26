@extends('layouts.work')


@section('content')
    <h1>Todos</h1>
    @if(Session::has('success'))


        <div class="alert alert-success alert-dismissible" id="myAlert">
            <a href="javascript: void(0)" class="close">&times;</a>
            <strong>{{Session::get('success')}}</strong>
        </div>

    @endif
    <div class="row">
        <div class="col-sm-5 col-sm-offset-3">
            <div class="col-sm-10">

                {!! Form::open(['method'=>'POST','action'=>'TodosController@store']) !!}

                <div class="form-group">

                    {!! Form::text('todo',null, ['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="col-sm-2">

                <div class="form-group">
                    {!! Form::submit('Create Todo', ['class'=>'btn btn-primary']) !!}
                </div>

            </div>
            {!! Form::close() !!}
            {{--<form action="/create/todo" method="post">--}}

            {{--<input type="text" class="form-control" name="todo" placeholder="Create a new todo!">--}}
            {{--</form>--}}

        </div>
    </div>

    <ul style="margin-top:40px">

        @if(count($todos)===0)
            <div class="col-sm-7 col-sm-offset-2">
             <h3 class="text-center">No Todos</h3>
            </div>

        @else

        @foreach($todos as $todo)

            <li style="list-style: none ;">
                <div class="col-sm-6 col-sm-offset-2">
                    <a href="{{route('todo.show',$todo->id)}}">{{$todo->todo}}</a>
                </div>
                <div class="col-sm-1">
                    {!! Form::open(['method'=>'DELETE','action'=>['TodosController@destroy',$todo->id]]) !!}

                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

                    {!! Form::close() !!}
                </div>

                @if(!$todo->is_completed==1)

                    <div class="col-sm-1">
                        <a href="{{route('todo.complete',$todo->id)}}" class="btn btn-info">Mark as Compelete</a>
                    </div>

                    @else

                    <div class="col-sm-1">
                        <div class="btn btn-info disabled">Completed!!!</div>
                    </div>
                @endif


            </li>


        @endforeach

        @endif



    </ul>


@stop

@section('script')

    <script>
        $(document).ready(function(){
            $(".close").click(function(){
                $("#myAlert").fadeOut();
            });
        });
    </script>


@endsection