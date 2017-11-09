<?php

namespace App\Http\Controllers;

use App\Getintouch;
use App\Http\Requests\welcomeRequest;
use App\Works;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class welcomeController extends Controller
{
    //
    public function index()
    {
        //
        $works = Works::where('is_active','1')->orderBy('star','desc')->orderBy('updated_at','desc')->take(7)->get();

        return view('welcome', compact('works'));
    }

    public function store(welcomeRequest $request){

        Getintouch::create($request->all());

        Session::flash('message','Thanks! I got your message!');

        return redirect()->back();

    }
}
