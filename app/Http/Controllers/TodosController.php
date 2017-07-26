<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TodosController extends Controller
{
    //
    public function index(){

        $todos = Todo::all();

        return view('todos/todos',compact('todos'));

    }

    public function store(Request $request){


            $todo = new Todo;

            $todo->todo = $request->todo;

            $todo->save();

            Session::flash('success','One Todo has been created!!');

            return redirect()->back();

    }



    public function destroy($id){

        $todo = Todo::findOrFail($id);

        $todo->delete();
        Session::flash('success','One Todo has been removed!!');

        return redirect()->back();

    }

    public function show($id){

        $todo = Todo::findOrFail($id);

        return view('todos/show',compact('todo'));


    }

    public function update(Request $request , $id){

        Todo::findOrFail($id)->update($request->all());

        Session::flash('success','One Todo has been updated!!');

        return redirect('/todos');


    }

    public function complete($id){

        $todo = Todo::findOrFail($id);

        $todo->is_completed = 1;

        $todo->save();

        Session::flash('success','One Todo has been completed!!');

        return redirect()->back();

    }


}
