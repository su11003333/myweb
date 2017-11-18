<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorksCreateRequest;
use App\Works;
use App\Workscategories;
use App\Worksfeatures;
use App\Workstags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $works = Works::all();

        return view('admin.works.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workscategories =Workscategories::pluck('name','id')->all();

        $workstags = Workstags::pluck('name','id')->all();

        return view('admin.works.create',compact('workscategories','workstags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorksCreateRequest $request)
    {
        //
        $input = $request->except('worksfeatures');


        $user = Auth::user();

        $work = $user->works()->create($input);

        $work->workstags()->attach($request->input('workstag_list'));



        if($files = $request->file('worksfeatures')){
//
            foreach($files as $file){

                $name = time().$file->getClientOriginalName();


                $file->move('images/upload/works', $name);

                Worksfeatures::create(['path'=>$name,'works_id'=>$work->id]);

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




        Session::flash('message','The new Work has been created');

        return redirect('/admin/works');

//            return $work;
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
        $work = Works::findOrFail($id);

        $workscategories =Workscategories::pluck('name','id')->all();

        $workstags = Workstags::pluck('name','id')->all();

        $workstags_list = $work->workstags->pluck('id')->toArray();

        $worksfeatures = $work->worksfeatures->all();

        return view('/admin/works/edit',compact('work','workscategories','workstags','worksfeatures','workstags_list'));

//        return $workstags_list;
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
        $input = $request->except('worksfeartures');


        $user = Auth::user();

        $work = $user->works()->findOrFail($id);

        $work->update($input);


        if(trim($request->input['workstags_list'])==''){

            $work->workstags()->detach();

            $work->workstags()->attach($request->input('workstag_list'));

        }
//



        if($files = $request->file('worksfeatures')){
//
            foreach($files as $file){

                $name = time().$file->getClientOriginalName();


                $file->move('images/upload/works', $name);

                Worksfeatures::create(['path'=>$name,'works_id'=>$work->id]);

            }

        }
        Session::flash('message','The new Post has been update');

        return redirect('/admin/works');

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
        Works::findOrFail($id)->delete();

        Session::flash('message','You have deleted a post');

        return redirect('/admin/works');
    }

    public function deletefeature($id){

        Worksfeatures::findOrFail($id)->delete();

        return redirect()->back();

    }

    public function active(Request $request, $id){

        $active = $request->input('is_active');

        $user = Auth::user();

        $work = $user->works()->findOrFail($id);

        $work->is_active = $active;

        $work->save();

//        Session::flash('message','The condition has been update');

        return redirect('/admin/works');

    }


    public function works(Request $request){


        $workscategories = Workscategories::all();

        $works = Works::where('is_active','1')->orderBy('star','desc')->orderBy('updated_at','desc')->paginate(5);

        if($request->ajax()){
            return [
                'works' => view('layouts.ajax.ajax_load_more')->with(compact('works'))->render(),
                'next_page'=>$works->nextPageUrl()
            ];
        }
        return view('/works/index',compact('works','workscategories'));

//        if (Request::ajax()) {
//            return Response::json(View::make('layouts.ajax.ajax_load_more', array('works' => $works))->render());
//        }
//        return view('/works/index',compact('works','workscategories'));





//        return $posts;

    }

    public function ajax_work($id){

        $work = Works::findOrFail($id);

        if($work->is_active == 1){

            $worknext = Works::where('id','>',$work->id)->orderBy('id','asc')->first();
//
            $workpre = Works::where('id', '<', $work->id)->orderBy('id','desc')->first();

            $tags = $work->workstags()->get();


            return view('/layouts/ajax/ajax_works_template',compact('work','worknext','workpre','tags'));

//        return $postpre->title;

        }else{
            return redirect('/works');
        }



    }

    public function work_single($id){


        $workscategories = Workscategories::all();



//        $works = Works::where('is_active','1')->orderBy('star','desc')->orderBy('updated_at','desc')->paginate(10);
        $work = Works::where('is_active','1')->findOrFail($id);

        $workcategory_id = $work->workscategories_id;

        $relateworks = Works::where('is_active','1')->where('workscategories_id',$workcategory_id)->where('id','!=',$id)->take(5)->get();



        return view('/works/single',compact('work','workscategories', 'relateworks'));


    }



}
