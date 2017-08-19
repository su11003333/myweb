@extends('layouts.admin')


@section('title')
    <h1>All Users <p class="badge bg-green">{{\App\User::all()->count()}}</p></h1>
@endsection

@section('content')

    @include('message.message')

    {{--<div class="col-md-12 col-sm-12 col-xs-12 text-center">--}}
        {{--<ul class="pagination pagination-split">--}}
            {{--<li><a href="#">A</a></li>--}}
            {{--<li><a href="#">B</a></li>--}}
            {{--<li><a href="#">C</a></li>--}}
            {{--<li><a href="#">D</a></li>--}}
            {{--<li><a href="#">E</a></li>--}}
            {{--<li>...</li>--}}
            {{--<li><a href="#">W</a></li>--}}
            {{--<li><a href="#">X</a></li>--}}
            {{--<li><a href="#">Y</a></li>--}}
            {{--<li><a href="#">Z</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}

    {{--<div class="clearfix"></div>--}}

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($users)


            @foreach($users as $user)


                <tr>
                    <td>{{$user->id}}</td>
                    <td> <img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                    {{--<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>--}}
                    <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach


        @endif


        </tbody>
    </table>


@stop