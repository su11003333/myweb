@extends('layouts.admin')


@section('title')
    <h1>Edit Categories</h1>
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

                    {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}

                        <div class="form-group">

                            {!! Form::label('name','Name:') !!}
                            {!! Form::text('name',null, ['class'=>'form-control']) !!}
                        </div>

                    @if (Route::has('login'))
                        @if (Auth::user()->isAdmin())
                            {!! Form::submit('Update Categories', ['class'=>'btn btn-primary col-sm-6']) !!}


                            {!! Form::close() !!}


                            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminCategoriesController@destroy', $category->id]]) !!}


                            {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-6']) !!}

                            {!! Form::close() !!}
                        @else
                            <div class="btn btn-danger">Guest cannot pass!</div>
                        @endif
                    @endif


                </div>
            </div>

            <div class="x_panel">
                <div class="x_title">
                    <h2>Add New SubCategory <small></small></h2>
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

                    {!! Form::open(['method'=>'Post','action'=>'AdminSubcategoriesController@store']) !!}
                    <input type="hidden" name="category_id" value="{{$category->id}}">
                    <div class="form-group">

                        {!! Form::label('name','Name:') !!}
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
                    </div>

                    @if (Route::has('login'))
                        @if (Auth::user()->isAdmin())
                            {!! Form::submit('Create SubCategories', ['class'=>'btn btn-primary col-sm-6']) !!}


                            {!! Form::close() !!}
                        @else
                            <div class="btn btn-danger">Guest cannot pass!</div>
                        @endif
                    @endif





                </div>
            </div>
        </div>




        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Subcategory <p class="badge bg-green">{{\App\Subcategory::all()->count()}}</p> </h2>
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
                            {{--<th>Id</th>--}}
                            <th>Subcategory </th>

                        </tr>
                        </thead>
                        <tbody>

                        @if($subcategories)


                            @foreach($subcategories as $subcategory)


                                <tr>
                                    {{--<td>{{$subcategory->id}}</td>--}}
                                    <td>{{$subcategory->name}}</td>
                                    {{--<td>{{$subcategory->created_at?$subcategory->created_at:"No date"}}</td>--}}
                                    <td>
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminSubcategoriesController@destroy', $subcategory->id],'class'=>'delete_confirm']) !!}


                                        {!! Form::submit('Delete Category', ['class'=>'btn btn-danger ']) !!}

                                        {!! Form::close() !!}
                                        {{--<a href="{{action('AdminSubcategoriesController@destroy',$subcategory->id)}}" class="btn btn-danger">Delete</a>--}}
                                    </td>
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