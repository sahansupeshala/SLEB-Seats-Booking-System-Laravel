<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routeshedule;
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
        return view('home');
    }

    public function adminHome()
    {
        //return view('adminHome');
        $route = User::join('buses', 'buses.user_id', '=', 'users.id')->
      
        where([['Status',1]])
        ->get();
 
         return view('adminHome',compact('route'));
    }
  
    
}
