<?php

namespace App\Http\Controllers;

use App\Category;
use App\Feature;
use App\Http\Requests\PostsCreateRequest;
use App\Post;
use App\Subcategory;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    public function store(PostsCreateRequest $request)
    {
        //
        $input = $request->except('fearture');


        $user = Auth::user();

        $post = $user->posts()->create($input);

        $post->tags()->attach($request->input('tag_list'));


        if($files = $request->file('feature')){
//
              foreach($files as $file){

                  $name = time().$file->getClientOriginalName();


                  $file->move('images/upload', $name);

                  Feature::create(['path'=>$name,'post_id'=>$post->id]);


//                  $input['feature_id'] = $feature->id;


              }




        }




//        if($file = $request->file('feature')){
//
//

//            $name = time().$file->getClientOriginalName();
//
//
//            $file->move('images/upload', $name);
//
//            $feature = Feature::create(['path'=>$name]);
//
//
//            $input['feature_id'] = $feature->id;
//
//
//        }




        Session::flash('message','The new Post has been created');

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

        $post = Post::findOrFail($id);

        $category =Category::pluck('name','id')->all();

        $subcategory = Subcategory::pluck('name','id')->all();

        $tags = Tag::pluck('name','id')->all();

        $features = $post->Features->all();

        return view('/admin/posts/edit',compact('post','category','subcategory','tags','features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsCreateRequest $request, $id)
    {
        //
        $input = $request->except('fearture');


        $user = Auth::user();

        $post = $user->posts()->findOrFail($id);

        $post->update($input);


        if(trim($request->input['tag_list'])==''){

            $post->tags()->detach();

            $post->tags()->attach($request->input('tag_list'));

        }
//



        if($files = $request->file('feature')){
//
            foreach($files as $file){

                $name = time().$file->getClientOriginalName();


                $file->move('images/upload', $name);

                Feature::create(['path'=>$name,'post_id'=>$post->id]);

            }

        }
        Session::flash('message','The new Post has been update');

        return redirect('/admin/posts');


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

        Post::findOrFail($id)->delete();

        Session::flash('message','You have deleted a post');

        return redirect('/admin/posts');

    }


    public function deletefeature($id){

        Feature::findOrFail($id)->delete();

        return redirect()->back();

    }
}
