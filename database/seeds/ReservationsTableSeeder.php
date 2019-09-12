<?php

use App\Models\Room;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $rooms = Room::all();
        $nbOfReservations = min(count($rooms), count($users));

        for ($i = 0; $i < rand($nbOfReservations / 2, $nbOfReservations); $i++) {
            $user = $users->random();
            $room = $rooms->random();

            $sign = rand(1, 2) % 2 == 0 ? '+' : '-';
            $daysAway = rand(1, 365);
            $nbOfDays = rand(2, 21);

            DB::table('reservations')->insert([
                'user_id' => $user->id,
                'room_id' => $room->id,
                'from_date' => date('Y-m-d', strtotime($sign . $daysAway . ' day')),
                'to_date' => date('Y-m-d', strtotime($sign . ($daysAway + $nbOfDays)))
            ]);
        }
    }
}
