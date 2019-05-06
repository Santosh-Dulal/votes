<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vote;
use App\User;
use Illuminate\Support\Facades\DB;

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
        $data['users_count']= User::count();
        $data['votes_count']=vote::count();
        $data['votes']=vote::max('voted_for');
        return view('home')->with($data)->with($data)->with($data);
    }
}
