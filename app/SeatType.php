<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatType extends Model
{
	protected $table = 'seatType';

	protected $fillable = ['name', 'description'];

	public function seats(){
		return $this->hasMany('App\Seat', 'seatTypeId', 'id');
	}
}
