@extends('layouts.admin')


@section('title')
    <h1>All Works Categories <p class="badge alert-success">{{\App\Workscategories::all()->count()}}</p></h1>
@endsection

@section('content')

    @include('message.message')

    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add New Works Categories <small></small></h2>
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

                    {!! Form::open(['method'=>'POST','action'=>'AdminWorkscategoriesController@store']) !!}

                    <div class="form-group">

                        {!! Form::label('name','Name:') !!}
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">

                        @if (Route::has('login'))
                            @if (Auth::user()->isAdmin())
                                {!! Form::submit('Create Works Categories', ['class'=>'btn btn-primary']) !!}
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
                    <h2>Works Categories</h2>
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
                            <th>Category</th>

                        </tr>
                        </thead>
                        <tbody>

                        @if($workscategories)


                            @foreach($workscategories as $workscategory)

                                <tr>
                                    <td>{{$workscategory->id}}</td>
                                    <td><a href="{{action('AdminWorkscategoriesController@edit',$workscategory->id)}}" class="">{{$workscategory->name}}</a></td>
                                    {{--<td>{{$tag->created_at?$tag->created_at:"No date"}}</td>--}}
                                    <td>

                                        {!! Form::open(['method'=>'DELETE','action'=>['AdminWorkscategoriesController@destroy',$workscategory->id],'class'=>'delete_confirm']) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>

                            @endforeach


                        @endif


                        </tbody>
                    </table>
                    {{ $workscategories->links() }}
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')

    <script type="text/javascript">

        $(".delete_confirm").submit(function(e){

            var delete_confirm_message = confirm ("Are you sure you want to delete!");

            if({{\App\Workstags::all()->count()}}>1 && delete_confirm_message){

                return true;

            }else{
                alert("You can't delete the last one!")
                e.preventDefault();
                return false;

            }
        })

    </script>

@endsection