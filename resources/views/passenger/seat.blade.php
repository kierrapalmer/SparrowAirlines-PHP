@extends('layouts.master')

@section('content')
	<?php $userSeats = \App\Http\Controllers\SeatController::getUserSeats();
	$assignedSeats = 0;
	foreach ($userSeats as $uSeats) {
		$assignedSeats .= $uSeats;
	}
	?>


    <main class="trip">
        <div class="container">
            <br>
            <div class="card">
                <div class="card-header bg-accent text-white">
                    <div class="row">
                        <div class="custom-column-md pl-2">
                            <h2 class="card-title">ATL </h2>
                            <p>Atlanta</p>
                        </div>
                        <div class="custom-column-sm">
                            <h1> &gt;</h1>
                        </div>
                        <div class="custom-column-md">
                            <h2 class="card-title">SLC</h2>
                            <p>Salt Lake City</p>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <p>{{ Session::get('info') }}</p>

                    <div class="row">
                        <div class="col-md-5">

                            <h3>Seat Selector:</h3>
                            <div class="plane p-3">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="box"><i class="fas fa-restroom"></i></div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-5">
                                        <div class="box"><i class="fas fa-utensils"></i></div>

                                    </div>

                                </div>
                                <p><i class="fas fa-caret-left"></i> Exit</p>

                                <p>----First Class----</p>
                                <div class="row seats">
                                    <div class="col-md-2">A</div>
                                    <div class="col-md-2">B</div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">C</div>
                                    <div class="col-md-2">D</div>
                                    <div class="col-md-2"></div>

									<?php $count = 0 ?>
                                    @foreach($seatsFirst as $seat)
                                        <div class="col-md-2">

											<?php $count++  ?>

                                            @if($seat->isOpen == 0)
                                                 <div class="occupied"></div>
                                            @else
                                                <a class="tool"
                                                   title=" {{\App\Http\Controllers\SeatController::getSeatType($seat->seatTypeId)->name}} Class
Seat: {{$seat->aisle}}{{$seat->row}}
${{$seat->price }}  "
                                                   href="{{ route('passenger.seat.assign', ['id' => $seat->id, 'isOpen' => 0]) }}">
                                                    <div class="open"></div>
                                                </a>
                                            @endif
                                        </div>
                                        @if($seat->aisle == 'B')
                                            <div class="col-md-2">{{$seat->row}}</div>
                                        @endif
                                        @if($seat->aisle == 'D')
                                            <div class="col-md-2"></div>
                                        @endif
                                    @endforeach
                                </div>
                                <br>
                                <p>----Deluxe Class----</p>

                                <div class="row seats deluxe">
                                    <div class="col-md-2">A</div>
                                    <div class="col-md-2">B</div>
                                    <div class="col-md-2">C</div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">D</div>
                                    <div class="col-md-2">E</div>
                                    <div class="col-md-2">F</div>

                                    @foreach($seatsDeluxe as $seat)
                                        <div class="col-md-2">
                                            @if($seat->isOpen == 0)
                                                  <div class="occupied"></div>
                                            @else
                                                <a class="tool"
                                                   title=" {{\App\Http\Controllers\SeatController::getSeatType($seat->seatTypeId)->name}} Class
Seat: {{$seat->aisle}}{{$seat->row}}
                                                           ${{$seat->price }}  "
                                                   href="{{ route('passenger.seat.assign', ['id' => $seat->id, 'isOpen' => 0]) }}">
                                                    <div class="open"></div>
                                                </a>
                                            @endif
                                        </div>
                                        @if($seat->aisle == 'C')
                                            <div class="col-md-2">{{$seat->row}}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <br>
                                <p>----Economy Class----</p>

                                <div class="row seats economy">
                                    <div class="col-md-2">A</div>
                                    <div class="col-md-2">B</div>
                                    <div class="col-md-2">C</div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">D</div>
                                    <div class="col-md-2">E</div>
                                    <div class="col-md-2">F</div>

                                    @foreach($seatsEconomy as $seat)
                                        <div class="col-md-2">
                                            @if($seat->isOpen == 0)

                                                    <div class="occupied"></div>
                                            @else
                                                <a class="tool"
                                                   title=" {{\App\Http\Controllers\SeatController::getSeatType($seat->seatTypeId)->name}} Class
Seat: {{$seat->aisle}}{{$seat->row}}
                                                           ${{$seat->price }}  "
                                                   href="{{ route('passenger.seat.assign', ['id' => $seat->id, 'isOpen' => 0]) }}">
                                                    <div class="open"></div>
                                                </a>
                                            @endif
                                        </div>
                                        @if($seat->aisle == 'C')
                                            <div class="col-md-2">{{$seat->row}}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="box"><i class="fas fa-restroom"></i></div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-5">
                                        <br><br>
                                        <p class="float-right">Exit <i class="fas fa-caret-right"></i></p>

                                    </div>
                                </div>

                            </div>
                        </div>
                            <div class="col-md-7">
                                Your seats:
                                <table class="seatTable table-hover">
                                    <thead>
                                    <th>Seat Number</th>
                                    <th>Seat Class</th>
                                    <th>Price</th>
                                    <th>Delete</th>
                                    </thead>
                                    @foreach($userSeats as $uSeats)
                                        <tr>
                                            <td> {{$uSeats->aisle}}{{$uSeats->row}}</td>
                                            <td>{{\App\Http\Controllers\SeatController::getSeatType($uSeats->seatTypeId)->name}}</td>
                                            <td> ${{$uSeats->price}}  </td>
                                            <td><a class="text-danger"
                                                   href="{{ route('passenger.seat.assign', ['id' => $uSeats->id, 'isOpen' => 1])}}">
                                                    X
                                                </a></td>
                                        </tr>
                                    @endforeach
                                    <p>Total Seats: {{count($userSeats)}}</p>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section("scripts")

    <script>
        $(function () {
            $(document).tooltip({
                tooltipClass: "uitooltip",
            });
        });
        /* $( function() {
             $( document ).tooltip({
                 position: {
                     my: "center bottom-20",
                     at: "center top",
                     using: function( position, feedback ) {
                         $( this ).css( position );
                         $( "<div>" )
                             .addClass( "arrow" )
                             .addClass( feedback.vertical )
                             .addClass( feedback.horizontal )
                             .appendTo( this );
                     }
                 }
             });
         } );*/
    </script>

@endsection