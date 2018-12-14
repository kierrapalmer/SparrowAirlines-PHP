<?php

namespace App\Http\Controllers;

use App\Seat;
use App\SeatType;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SeatController extends Controller
{
	public function getSeats() {
		$seatsFirst =  Seat::where('seatTypeId', '=', '1')->orderBy('row')->orderBy('aisle')->get();
		$seatsDeluxe =  Seat::where('seatTypeId', '=', '2')->orderBy('row')->orderBy( 'aisle')->get();
		$seatsEconomy =  Seat::where('seatTypeId', '=', '3')->orderBy('row')->orderBy('aisle')->get();

//		$seat =  Seat::where('id', '=', '1')->get();

//		$seatTypeFirst = $seat->seatType();

		return view('passenger.seat',
			['seatsFirst' => $seatsFirst,
			'seatsDeluxe' => $seatsDeluxe,
			'seatsEconomy' => $seatsEconomy
				]);
	}

	public function getTrip(){
		self::getUserSeats();
		return view('passenger.trip');
	}

	public static function getUserSeats(){
		$user = Auth::user();
		if($user != null) {
			$seats = Seat::where('user_id', '=', $user->id)->get();

			return $seats;
		}

		else{
			return redirect()->route('index')->with('info', 'No user signed in');
		}
	}


	/*public static function getNumberOfAisles($seatTypeId){
		$aisleCount = Seat::where('seatTypeId', '=', $seatTypeId)->distinct('aisle')->count('aisle');
		return $aisleCount;
	}*/

	public static function getSeatType($seatTypeId){
		$seatType = SeatType::where('id', '=', $seatTypeId)->first();
		return $seatType;
	}

	//Assigns or unassigns seat
	public function getAssignSeat($id, $isOpen){
		$user = Auth::user();


		if($user != null) {
			$assignedSeat = Seat::find($id);
			$assignedSeat->isOpen = $isOpen;                //sets seat to either open(1) or occupied(0)

			if ($isOpen == 1) {
				$assignedSeat->user()->dissociate();        //unassignes seat from user
			} else {
				$user->seats()->save($assignedSeat);
			}
			$assignedSeat->save();
			return redirect()->route('passenger.seat')->with('info', 'Seat Assigment Changed');
		}
		else{
			return redirect()->route('passenger.seat')->with('info', 'No user signed in');
		}


	}



}
