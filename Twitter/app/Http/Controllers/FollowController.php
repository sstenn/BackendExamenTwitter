<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Auth;
    use DB;
    use App\Follow;

    class FollowController extends Controller
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
//
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
            $follow = new Follow;
            $follow->user_id = Auth::id();
            $follow->follows_user_id   = $request->follows_user_id;
            $follow->save();     
            
            return redirect('/user/' . $request->follows_user_id);
        }

        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
//
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
            DB::table('follows')
                            ->where('user_id', '=', Auth::id())
                            ->where('follows_user_id', '=', $id)
                            ->delete();
                            
            return redirect('/user/' . $id);
        }
    }
