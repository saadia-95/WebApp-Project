<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
    	if (\Auth::check()) {
            $data['data'] = \Auth::user();
            $users = \DB::table('users')->get();
            
        }
        return view('profile')->with('users', $users);
    }
}
