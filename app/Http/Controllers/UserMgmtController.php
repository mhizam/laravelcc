<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserMgmtController extends Controller
{
    
    public function doEditUser(Request $req)
    {
        $thatuser = User::find($req->uid);
        //$thatuser = User::where('id', $req->uid)->get();

        // get - > return array of the object / model
        // first -> return object / model

        return view('admin.updUser', ['userinfo' => $thatuser]);
    }
    public function showEditUser(Request $req)
    {
        $thatuser = User::find($req->uid);
        //$thatuser = User::where('id', $req->uid)->get();

        // get - > return array of the object / model
        // first -> return object / model

        return view('admin.updUser', ['userinfo' => $thatuser]);
    }
    //
}
