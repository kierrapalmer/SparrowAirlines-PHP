<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
	protected $fillable = ['aisle', 'row', 'seatTypeId', 'price', 'status'];


	public function user() {
		return $this->belongsTo('App\User');
	}

	public function seatType() {
		return $this->belongsTo('App\SeatType', 'id', 'seatTypeId');

	}
}
