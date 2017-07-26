<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name','id')->all();

        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
      if(trim($request->password=='')){

          $input = $request->all();

          $input['password'] = bcrypt('0000');
//          如沒設密碼，則密碼預設為0000，為字串。



      }else{

          $input = $request->all();

          $input['password'] = bcrypt($request->password);

      }


      if($file = $request->file('photo_id')){

          $name = time().$file->getClientOriginalName();

          $file->move('photo',$name);

          $photo=Photo::create(['file'=>$name]);

          $input['photo_id']=$photo->id;


      }



      User::create($input);

        Session::flash('message','The user has been created!');

      return redirect('/admin/users');



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
        $user = User::findOrFail($id);

        $roles = Role::pluck('name','id')->all();

        return view('admin.users.edit',compact('user','roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);

        if(trim($request->password=='')){

            $input = $request->except('password');

        }else{

            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }


        if($file = $request->file('photo_id')){

            $name = time().$file->getClientOriginalName();

            $file->move('photo',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id']= $photo->id;

        }



        $user->update($input);

        Session::flash('message','The user info has been updated!');

        return redirect('/admin/users');

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



        $user = User::findOrFail($id);

        if(!$user->photo->id ==1){

            unlink(public_path().$user->photo->path);

        }

        $user->delete();

        Session::flash('message','The user has been deleted!');

        return redirect('/admin/users');

    }
}
