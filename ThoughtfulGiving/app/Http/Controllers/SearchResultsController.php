<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
 
use App\User;
use App\Items; 
  

class SearchResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function search($company)
    
    {
            $companyItems = array();
            $userList = User::where('users.company', '=', $company)
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $company = User::where('category', '=', $request->all()['category'])
            ->select('company','id')
            ->get();

        return view('searchResults', compact('company')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
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
    }
}
