@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-danger rounded-0">

        <div class="text-center text-white">
            <h1>YouTube Curation × SNS</h1>
        </div>

    </div>

    <div class="text-right">

        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif

    </div>

    @include('users.users', ['users'=>$users])

@endsection