<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')){
            $route = 'admin.home';
        }
        else if ($user->hasRole('doctor')){
            $route = 'doctor.home';
        }
        else{
            throw new Exception ("Undefined user role");
        }
        return redirect()->route($route);
    }
}
