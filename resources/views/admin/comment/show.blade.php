@extends('layouts.admin')

@section('title')
    <h1>Comments<p class="badge bg-green">{{\App\Comment::all()->count()}}</p></h1>
@endsection

@section('content')


    @if(count($comments)>0)


        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>E-mail</th>
                <th>Content</th>
                <th>Create Time</th>

            </tr>
            </thead>
            <tbody>


            @foreach($comments as $comment)


                <tr>
                    <td>{{$comment->id}}</td>

                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td>{{$comment->created_at}}</td>
                    <td><a href="{{route('home.post',$comment->post->id)}}">View Post</a></td>
                    <td>
                        @if($comment->is_active == 1)

                            {!! Form::model($comment,['method'=>'PATCH','action'=>['PostCommentsController@update',$comment->id]]) !!}


                            <input type="hidden" value="0" name="is_active">

                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-primary']) !!}
                            </div>

                            {!! Form::close() !!}


                        @else


                            {!! Form::model($comment,['method'=>'PATCH','action'=>['PostCommentsController@update',$comment->id]]) !!}


                            <input type="hidden" value="1" name="is_active">

                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-danger']) !!}
                            </div>

                            {!! Form::close() !!}


                        @endif



                    </td>
                    <td>

                        {!! Form::open(['method'=>'DELETE','action'=>['PostCommentsController@destroy',$comment->id]]) !!}


                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-info']) !!}
                        </div>

                        {!! Form::close() !!}

                    </td>



                    {{--<td> <img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>--}}
                    {{--<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>--}}
                    {{--<td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>--}}
                    {{--<td>{{$user->email}}</td>--}}
                    {{--<td>{{$user->role ? $user->role->name : 'User has no role'}}</td>--}}
                    {{--<td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>--}}
                    {{--<td>{{$user->created_at->diffForHumans()}}</td>--}}
                    {{--<td>{{$user->updated_at->diffForHumans()}}</td>--}}
                </tr>

            @endforeach



            </tbody>
        </table>

    @else

        <h1 class="text-center">No Comments</h1>



    @endif





@endsection