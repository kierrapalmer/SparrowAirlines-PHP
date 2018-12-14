@extends('layouts.master')

    <secion class="main">
    <img class="cover" src="https://source.unsplash.com/collection/1401046/1600x800">

    <div class="cover-text">
        <h1>Welcome to <br> Sparrow Airlines</h1>
        <h2>Your Adventure Awaits You</h2>
        @if (Auth::check())
        <a href="{{ route('passenger.trip') }}" class="btn btn-outline-light font-weight-bold">View Your Trip</a>

        @else
            <a href="{{ url('/login') }}" class="btn btn-outline-light font-weight-bold">Login To Start Your Adventure Today</a>
        @endif
    </div>
    </secion>
