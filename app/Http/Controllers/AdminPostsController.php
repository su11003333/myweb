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

        $tags = Tag::pluck('name','id')->toArray();

        $tag_list = $post->tags->pluck('id')->toArray();

        $features = $post->features->all();

        return view('/admin/posts/edit',compact('post','category','subcategory','tags','features','tag_list'));
//        return $tag_list;
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


    public function post($id){

        $post = Post::findOrFail($id);

        if($post->is_active == 1){

            $postnext = Post::where('id','>',$post->id)->orderBy('id','asc')->first();
//
            $postpre = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();

            $tags = $post->tags()->get();

            $comments = $post->comments()->whereIsActive(1)->get();

            return view('/blog/index',compact('post','comments','postnext','postpre','tags'));

//        return $postpre->title;

        }else{
            return redirect('/posts');
        }



    }


    public function posts(){

        $posts = Post::where('is_active','1')->paginate(10);

        return view('/blog/home',compact('posts'));

//        return $posts;

    }

    public function active(Request $request, $id){

        $active = $request->input('is_active');

        $user = Auth::user();

        $post = $user->posts()->findOrFail($id);

        $post->is_active = $active;

        $post->save();

//        Session::flash('message','The condition has been update');

        return redirect('/admin/posts');

    }


}
