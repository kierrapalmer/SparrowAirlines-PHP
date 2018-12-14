<?php

	use Illuminate\Database\Seeder;

	class SeatTableSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			//front of plane
			$this->newFirstClassRow(1);
			$this->newFirstClassRow(2);
			$this->newFirstClassRow(3);
			$this->newFirstClassRow(4);

			$this->newDeluxeClassRow(5);
			$this->newDeluxeClassRow(6);
			$this->newDeluxeClassRow(7);
			//entrance
			$this->newDeluxeClassRow(8);
			$this->newDeluxeClassRow(9);
			$this->newDeluxeClassRow(10);

			$this->newEconomyClassRow(11);
			$this->newEconomyClassRow(12);
			$this->newEconomyClassRow(13);
			$this->newEconomyClassRow(14);
			$this->newEconomyClassRow(15);
			$this->newEconomyClassRow(16);

			$this->newEconomyClassRow(17);
			$this->newEconomyClassRow(18);
			$this->newEconomyClassRow(19);
			$this->newEconomyClassRow(20);
			$this->newEconomyClassRow(21);
			$this->newEconomyClassRow(22);
			$this->newEconomyClassRow(23);
			$this->newEconomyClassRow(24);
			$this->newEconomyClassRow(25);
			$this->newEconomyClassRow(26);
			$this->newEconomyClassRow(27);
			$this->newEconomyClassRow(28);
			$this->newEconomyClassRow(29);
			$this->newEconomyClassRow(30);
			//rear of plane

		}

		public function newFirstClassRow($rowId){
			$seat = new \App\Seat([
				'aisle' => 'A',
				'row' => $rowId,
				'seatTypeId' => 1,
				'price' => 355.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'B',
				'row' => $rowId,
				'seatTypeId' => 1,
				'price' => 355.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'C',
				'row' => $rowId,
				'seatTypeId' => 1,
				'price' => 355.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'D',
				'row' => $rowId,
				'seatTypeId' => 1,
				'price' => 355.00,
				'isOpen' => 1
			]);
			$seat->save();
		}

		public function newDeluxeClassRow($rowId){
			$seat = new \App\Seat([
				'aisle' => 'A',
				'row' => $rowId,
				'seatTypeId' => 2,
				'price' => 279.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'B',
				'row' => $rowId,
				'seatTypeId' => 2,
				'price' => 279.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'C',
				'row' => $rowId,
				'seatTypeId' => 2,
				'price' => 279.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'D',
				'row' => $rowId,
				'seatTypeId' => 2,
				'price' => 279.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'E',
				'row' => $rowId,
				'seatTypeId' => 2,
				'price' => 279.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'F',
				'row' => $rowId,
				'seatTypeId' => 2,
				'price' => 279.00,
				'isOpen' => 1
			]);
			$seat->save();
		}

		public function newEconomyClassRow($rowId){
			$seat = new \App\Seat([
				'aisle' => 'A',
				'row' => $rowId,
				'seatTypeId' => 3,
				'price' => 223.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'B',
				'row' => $rowId,
				'seatTypeId' => 3,
				'price' => 223.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'C',
				'row' => $rowId,
				'seatTypeId' => 3,
				'price' => 223.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'D',
				'row' => $rowId,
				'seatTypeId' => 3,
				'price' => 223.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'E',
				'row' => $rowId,
				'seatTypeId' => 3,
				'price' => 223.00,
				'isOpen' => 1
			]);
			$seat->save();

			$seat = new \App\Seat([
				'aisle' => 'F',
				'row' => $rowId,
				'seatTypeId' => 3,
				'price' => 223.00,
				'isOpen' => 1
			]);
			$seat->save();
		}
	}
