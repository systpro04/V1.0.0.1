<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        if(auth()->check() && auth()->user()->is_admin == 1){

        $users = User::all();

            return view('admin.dashboard', compact('users'));
        }else{
            
            return view('user.dashboard');
        }
    }
}

