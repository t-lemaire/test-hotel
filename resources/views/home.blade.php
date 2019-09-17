@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        @auth
        <h1 class="display-4">Hello, {{Auth::user()->name }} and welcome to the Test Hotel!</h1>
        @endauth
        @guest
                <h1 class="display-4">Welcome to the Test Hotel!</h1>
        @endguest
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
@endsection
