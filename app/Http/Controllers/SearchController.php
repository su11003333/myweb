<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function search(){

        $searchKey=  Input::get('searchKey');

//        $error = ['error' => 'No results found, please try with different keywords.'];

        $works = Works::search($searchKey)->where('is_active','1')->orderBy('star','desc')->orderBy('updated_at','desc')->paginate('10');

        $posts = Post::search($searchKey)->where('is_active','1')->orderBy('updated_at','desc')->paginate('10');

        return view('search',compact('works','posts'));


    }

    public function search_category($id){

        $posts = Category::findOrFail($id)->posts()->where('is_active','1')->orderBy('updated_at','desc')->paginate('10');

        $categories = Category::all();

        $tags = Tag::all();

        return view ('blog.home',compact('posts','categories','tags'));
    }

    public function search_tag($id){

        $posts = tag::findOrFail($id)->posts()->where('is_active','1')->orderBy('updated_at','desc')->paginate('10');

        $categories = Category::all();

        $tags = Tag::all();

        return view ('blog.home',compact('posts','categories','tags'));
    }
}
