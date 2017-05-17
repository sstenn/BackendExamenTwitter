<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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
        $tweets = DB::table('follows')
                            ->join('tweets', 'follows.follows_user_id', '=', 'tweets.user_id')
                            ->join('users', 'tweets.user_id', '=', 'users.id')
                            ->select('users.id as u_id', 'users.name', 'tweets.id as t_id', 'tweets.tweet', 'tweets.updated_at', 'tweets.user_id')
                            ->where('follows.user_id', Auth::id())
                            ->orderBy('tweets.created_at', 'desc')
                            ->get();
                                    
        /*$tweets = DB::table('tweets')
                            ->join('users', 'tweets.user_id', '=', 'users.id')
                            ->select('users.*', 'tweets.*')
                            ->get();     */
        
        return view('home', ['tweets' => $tweets]);
    }
}
