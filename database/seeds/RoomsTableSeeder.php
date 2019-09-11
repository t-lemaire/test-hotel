<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($floorId = 1; $floorId <= 10; $floorId++) {
            for ($roomId = 1; $roomId <= 15; $roomId++) {
                $roomNumber = (int)($floorId . str_pad($roomId, 2, '0', STR_PAD_LEFT));
                DB::table('rooms')->insert([
                    'floor' => $floorId,
                    'room_number' => $roomNumber,
                    'description' => sprintf(
                        'Room %d on floor %d.',
                        $roomNumber,
                        $floorId
                    ),
                    'out_of_order' => rand(1, 2) % 2 == 0 ? true : false
                ]);
            }
        }
    }
}
