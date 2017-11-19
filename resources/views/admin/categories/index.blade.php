@extends('layouts.admin')


@section('title')
    <h1>All Categories <p class="badge bg-green">{{\App\Category::all()->count()}}</p></h1>
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

                    {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}

                        <div class="form-group">

                            {!! Form::label('name','Name:') !!}
                            {!! Form::text('name',null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            @if (Route::has('login'))
                                @if (Auth::user()->isAdmin())
                                    {!! Form::submit('Create Categories', ['class'=>'btn btn-primary']) !!}
                                @else
                                    <div class="btn btn-danger">Guest cannot pass!</div>
                                @endif
                            @endif

                        </div>

                        {!! Form::close() !!}



                </div>
            </div>


        </div>




        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Category </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Subategory</th>

                        </tr>
                        </thead>
                        <tbody>

                        @if($categories)


                            @foreach($categories as $category)


                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td><a href="{{action('AdminCategoriesController@edit',$category->id)}}" class="">{{$category->name}}</a></td>
                                    <td>{{$category->created_at?$category->created_at:"No date"}}</td>
                                </tr>

                            @endforeach


                        @endif


                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>














@stop