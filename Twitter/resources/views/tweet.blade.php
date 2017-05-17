@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($tweets as $tweet)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tweet</div>

                <div class="panel-body">
                    <form method="POST" action="{{ url('tweets/' . $tweet->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <textarea cols="20" rows="5" name="tweet">{{ $tweet->tweet }}</textarea>
                    <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection