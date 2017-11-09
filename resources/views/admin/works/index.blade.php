@extends('layouts.admin')


@section('title')
    <h1>All Works <span class="badge bg-green">{{$works->count()}}</span></h1>
@endsection

@section('content')


    @include('message.message')


    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Banner</th>
            <th width="150px">Title</th>
            <th>Category</th>
            <th>Company</th>
            <th>Tag</th>
            <th>Created</th>
            <th>Updated</th>
            <th></th>

        </tr>
        </thead>
        <tbody>

        @if($works)


            @foreach($works as $work)


                <tr>
                    <td>{{$work->id}}</td>
                    <td>
                        {{--@if($work->workscategories->name == "影片")--}}

                                {{--<video width="100px">--}}
                                    {{--<source src="{{$work->banner}}" type="video/mp4">--}}
                                    {{--Your browser does not support the video tag.--}}
                                {{--</video>--}}


                        {{--@else--}}
                            <img height="50" src="{{$work->banner ? $work->banner  : 'http://placehold.it/400x400'}}" alt="" >
                        {{--@endif--}}

                    </td>
                    {{--<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>--}}
                    {{--<td><a href="{{route('post.edit',$post->id)}}">{{$post->name}}</a></td>--}}
                    <td><a href="{{route('works.edit',$work->id)}}">{{$work->title}}</a></td>
                    {{--<td>{{$work->user->name}}</td>--}}
                    <td>{{$work->workscategories->name}}</td>
                    <td>{{$work->company}}</td>
                    <td>
                        @if($work->workstags)
                            @foreach($work->workstags as $workstag)

                                <span class="badge">{{$workstag->name}}</span>


                            @endforeach


                        @endif
                    </td>
                    {{--<td>{!!$post->body!!}</td>--}}
                    <td>{{$work->created_at->diffForHumans()?$work->created_at->diffForHumans():"No date"}}</td>
                    <td>{{$work->updated_at->diffForHumans()?$work->updated_at->diffForHumans():"No date"}}</td>
                    <td>
                        @if($work->is_active == 1)

                            {!! Form::model($work,['method'=>'PATCH','action'=>['AdminWorksController@active',$work->id]]) !!}


                            <input type="hidden" value="0" name="is_active">

                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-primary']) !!}
                            </div>

                            {!! Form::close() !!}


                        @else


                            {!! Form::model($work,['method'=>'PATCH','action'=>['AdminWorksController@active',$work->id]]) !!}


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