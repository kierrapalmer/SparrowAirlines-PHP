<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Seat;
class Airplane extends Model
{
	public function seats()
	{
		return $this->hasMany(Seat::class);
	}

	public function rowSeats($row)
	{
		return $this->seats()->where('row', $row);
	}

}
