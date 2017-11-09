<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Workstags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminWorkstagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workstags = Workstags::paginate(5);

        return view('admin/workstags/index',compact('workstags'));
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
        Workstags::create($request->all());

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
        $workstag=Workstags::findOrFail($id);



        return view('admin.workstags.edit',compact('workstag'));
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
        $workstag = Workstags::findOrFail($id);

        $workstag->update($request->all());

        Session::flash('message','The Works Tag has been updated');

        return redirect('/admin/workstags');
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
        Workstags::findOrFail($id)->delete();

        return redirect('/admin/workstags');
    }
}
