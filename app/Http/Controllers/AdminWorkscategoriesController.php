<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Workscategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminWorkscategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workscategories = Workscategories::paginate(5);

        return view('admin/workscategories/index',compact('workscategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {
        //
        Workscategories::create($request->all());

        Session::flash('message','The New Tag has been created!!');

        return redirect()->back();
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
        $workscategory=Workscategories::findOrFail($id);



        return view('admin.workscategories.edit',compact('workscategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, $id)
    {
        //
        $workscategory = Workscategories::findOrFail($id);

        $workscategory->update($request->all());

        Session::flash('message','The Works Category has been updated');

        return redirect('/admin/workscategories');
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
        Workscategories::findOrFail($id)->delete();

        return redirect('/admin/workscategories');
    }
}
