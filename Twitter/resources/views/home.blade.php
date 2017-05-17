@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tweet</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action= {{ route('tweets.store')}} >
                    {{ csrf_field() }}
                    <textarea cols="20" rows="5" name="tweet"></textarea>
                    <input class="btn btn-primary" type="submit" value="Post">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @foreach($tweets as $tweet)
        
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><a href="{{route('user.show', ['id' => $tweet->user_id])}}">{{ $tweet->name }}</a> 
                    <small><i> Posted on {{ $tweet->updated_at }}</i></small>
                    </h4>
                </div>
                <div class="panel-body">
                    
                    <div> {{ $tweet->tweet }}</div>   
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
