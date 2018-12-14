@extends('layouts.master')
<?php $userSeats = \App\Http\Controllers\SeatController::getUserSeats();?>

@section('content')
    <main class="trip">
        <div class="container">
            <br>
            <div class="card">
                <div class="card-header bg-accent text-white">
                    <strong>Flight: </strong> FB 1224
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="card-title">ATL -> SLC</h1>
                            <p>Atlanta &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Salt Lake City</p>
                        </div>
                        <div class="col-md-6">

                            <p><strong> Seat:</strong>
                                <?php
                                    $len = count($userSeats);
                                    $count = 0;
                                ?>
                                 @foreach($userSeats as $seat)
                                    {{$seat->aisle}}{{$seat->row}}

                                    @if($count != $len-1)
                                         ,
                                    @endif
		                            <?php $count++ ?>
                                 @endforeach
                            </p>
                            <a href="{{ route('passenger.seat') }}" class="btn btn-accent">Change Seats</a>

                        </div>
                    </div>

                    <hr/>
                    <p>Monday, September 3, 2018</p>
                    <p><strong>DEPART:</strong> 1:15 PM &nbsp&nbsp&nbsp&nbsp
                        <strong>ARRIVE: </strong> 3:25 PM</p>

                </div>

            </div>
        </div>
    </main>

@endsection