@extends('layouts.app')

@section('content')


<?php
    $followers = [];

    foreach($follow as $follower){
        array_push($followers, $follower->follows_user_id); 
    }
    //var_dump($followers);exit();
?>

<div class="container">

    @foreach($user as $u)

    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3>{{ $u->name }}</h3>
            <div class="pull-right">
                @if (!in_array($u->id, $followers ))
                <form method="POST" action={{ route('follow.store', ['follows_user_id' => $u->id]) }}>
                    {{ csrf_field() }}
                    <button class="btn btn-primary" type="submit">
                        Follow
                    </button>

                </form>

                @else 
                <form method="POST" action="{{ url('follow/' . $u->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-info" type="submit">
                        Unfollow
                    </button>

                </form>                      
                @endif
            </div>    
        </div>
    </div>
    </div>


    @endforeach
</div>
@endsection