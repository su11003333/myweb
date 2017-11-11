<?php

namespace App\Http\Controllers;

use App\Post;
use App\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function search(){

        $searchKey=  Input::get('searchKey');

//        $error = ['error' => 'No results found, please try with different keywords.'];

        $works = Works::search($searchKey)->where('is_active','1')->orderBy('star','desc')->orderBy('updated_at','desc')->paginate('20');

        $posts = Post::search($searchKey)->where('is_active','1')->orderBy('updated_at','desc')->paginate('20');




        return view('search',compact('works','posts'));




    }
}
