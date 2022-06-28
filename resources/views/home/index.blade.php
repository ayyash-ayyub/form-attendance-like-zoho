@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Attendance Management </h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="#" role="button">schedule new activity  &raquo;</a>
        @endauth

        @guest
        <h1>Welcome</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
