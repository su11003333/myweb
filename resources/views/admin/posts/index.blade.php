@extends('layouts.admin')


@section('title')
    <h1>All Posts <span class="badge bg-green">{{$posts->count()}}</span></h1>
@endsection

@section('content')


    @include('message.message')


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Author</th>
            <th>Tag</th>
            <th>Created</th>
            <th>Updated</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @if($posts)


            @foreach($posts as $post)


                <tr>
                    <td>{{$post->id}}</td>
                    <td> <img height="50" src="{{$post->banner ? $post->banner  : 'http://placehold.it/400x400'}}" alt="" ></td>
                    {{--<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>--}}
                    {{--<td><a href="{{route('post.edit',$post->id)}}">{{$post->name}}</a></td>--}}
                    <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->user->name}}</td>
                    <td>
                        @if($post->tags)
                            @foreach($post->tags as $tag)

                           <span class="badge">{{$tag->name}}</span>


                            @endforeach


                        @endif
                    </td>
                    {{--<td>{!!$post->body!!}</td>--}}
                    <td>{{$post->created_at->diffForHumans()?$post->created_at->diffForHumans():"No date"}}</td>
                    <td>{{$post->updated_at->diffForHumans()?$post->updated_at->diffForHumans():"No date"}}</td>
                    <td>
                        <a href="{{route('home.post',$post->id)}}">View Post</a>
                    </td>
                    <td>
                        <a href="{{route('comments.show',$post->id)}}">View Comments</a>
                    </td>
                    <td>
                        @if($post->is_active == 1)

                            {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@active',$post->id]]) !!}


                            <input type="hidden" value="0" name="is_active">

                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-primary']) !!}
                            </div>

                            {!! Form::close() !!}


                        @else


                            {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@active',$post->id]]) !!}


                            <input type="hidden" value="1" name="is_active">

                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-danger']) !!}
                            </div>

                            {!! Form::close() !!}


                        @endif
                    </td>
                </tr>

            @endforeach


        @endif


        </tbody>
    </table>


@stop