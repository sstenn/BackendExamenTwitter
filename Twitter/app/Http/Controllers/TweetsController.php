<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Auth;
    use DB;
    use App\Tweet;

    class TweetsController extends Controller
    {
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function index()
        {
            return view('home');
        }

        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
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
            $tweet = new Tweet;
            $tweet->user_id = Auth::id();
            $tweet->tweet   = $request->tweet;
            $tweet->save();     
            
            return redirect('/home');
        }

        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
            $tweets = DB::table('tweets')->where('id', $id)->get();
            
            return view('tweet', ['tweets' => $tweets]);
        }

        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function edit($id)
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
            DB::table('tweets')->where('id', $id)->update(['tweet' => $request->tweet]);
            
            return redirect('/welcome');
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {          
            Tweet::destroy($id);
            
            return redirect('/home');
        }
    }
