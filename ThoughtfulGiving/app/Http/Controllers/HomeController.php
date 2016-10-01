<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\User;
use App\Items; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //$this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Items::with('user')->get();

        return view('home', compact('items')); 
       
    }
    public function update(Request $request, $id)
    {

        $items = Items::find($user_id);
        $items->item = json_encode([$request->item]);

        $items->save();

        return view('home', compact('items'));
    }



}

