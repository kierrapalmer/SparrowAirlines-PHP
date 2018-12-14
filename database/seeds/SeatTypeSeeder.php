<?php

use Illuminate\Database\Seeder;

class SeatTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $seatType = new \App\SeatType([
		    'name' => 'First',
		    'description' => '2x as much recline than Main Cabin and 8" legroom. Complimentary alcoholic and fountain beverages. '
	    ]);
	    $seatType->save();

	    $seatType = new \App\SeatType([
		    'name' => 'Business',
		    'description' => '2x as much recline than Main Cabin and 4" legroom. Complimentary alcoholic and fountain beverages. Luxury pillows and blankets. '
	    ]);
	    $seatType->save();

	    $seatType = new \App\SeatType([
		    'name' => 'Economy',
		    'description' => 'Complimentary fountain beverages and snacks. '
	    ]);
	    $seatType->save();
    }
}
