<?php

namespace App\Http\Controllers;

use App\Category;
use App\Feature;
use App\Post;
use App\Subcategory;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();

        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $category =Category::pluck('name','id')->all();

        $subcategory = Subcategory::pluck('name','id')->all();

        $tags = Tag::pluck('name','id')->all();

        return view('admin.posts.create',compact('category','subcategory','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();


        $user = Auth::user();


        if($file = $request->file('feature')){


            $name = time().$file->getClientOriginalName();


            $file->move('images/upload', $name);

            $feature = Feature::create(['path'=>$name]);


            $input['feature_id'] = $feature->id;


        }




        $post = $user->posts()->create($input);

        $post->tags()->attach($request->input('tag_list'));

        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
