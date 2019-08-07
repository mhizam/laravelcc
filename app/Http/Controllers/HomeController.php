<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getProfile()
    {   
        $allusers = User::all();
        return view('users',[
            'userss' => $allusers,
            'title' => 'List of all users'
        ]);
    }

    public function addUser(Request $req)
    {   
        //dd($req);
        return view('admin.addUser');
    }

    public function updUser(Request $req)
    {   
        return view('admin.updUser');
    }
}
