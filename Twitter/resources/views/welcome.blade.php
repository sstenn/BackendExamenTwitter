<style>

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }      

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }


</style>


@extends('layouts.app')

@section('content')
@if (Route::has('login'))
@if (Auth::check())
<div class="flex-center">
    <h3><a href="{{ url('/home') }}">Go to your timeline</a></h3>
</div>
@endif
@endif

<div class="container">
    @foreach($tweets as $tweet)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><a href="{{route('user.show', ['id' => $tweet->user_id])}}">{{ $tweet->name }}</a>
                    <small><i> Posted on {{ $tweet->updated_at }}</i></small>
                    </h4>
                    @if (Auth::id() == $tweet->user_id)
                    <div class="pull-right">
                        <form method="POST" action="{{ url('tweets/' . $tweet->t_id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a class="btn btn-success" role="button" href="{{route('tweets.show', ['id' => $tweet->t_id])}}">Edit</a>
                            <button class="btn btn-danger" type="submit">
                                Delete
                            </button>

                        </form>

                    </div>    
                    @endif
                    <div class="pull-right">
                    </div>
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

