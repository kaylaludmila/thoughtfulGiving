<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\User;
use App\Items; 
use Auth;

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

        $user = User::find(Auth::user()->id);

        $items = $user->items()->get();

        return view('home', compact('items')); 
       
    }
    public function addItem(Request $request)
    {
        $items = new Items;

        $items->user_id = Auth::user()->id;

        $items->item = $request->item;

        $items->save();

        return redirect()->action('HomeController@index');
    }
    public function edit($theCompany)
    {
            $companyItems = array();
            $userList = User::where('users.company', '=', $theCompany)
            ->rightJoin('items','users.id', '=', 'items.user_id')
            ->select('items.item', 'company', 'firstName', 'lastName', 'email', 'mission', 'siteLink', 'bannerURL', 'logoURL')
            ->get();

            foreach($userList as $user)
            {
                $companyItems[] = $user->item;
            }
          
            $theCompany = (object)$userList[0];

        return view('companyView', compact('theCompany', 'companyItems')); 
    }



}

