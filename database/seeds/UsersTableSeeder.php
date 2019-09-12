<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    private $givenNames = [
        //Girls
        'Olivia',
        'Emma',
        'Ava',
        'Sophia',
        'Isabella',
        'Amelia',
        'Mia',
        'Charlotte',
        'Harper',
        'Aria',
        //Boys
        'Liam',
        'Noah',
        'Oliver',
        'Elijah',
        'Lucas',
        'Mason',
        'Ethan',
        'Logan',
        'Aiden',
        'James'
    ];

    private $surnames = [
        'Smith',
        'Johnson',
        'Williams',
        'Jones',
        'Brown',
        'Davis',
        'Miller',
        'Wilson',
        'Moore',
        'Taylor',
        'Anderson',
        'Thomas',
        'Jackson',
        'White',
        'Harris',
        'Martin',
        'Thompson',
        'Garcia',
        'Martinez',
        'Robinson'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usedEmails = [];
        for ($i = 0; $i < rand(200, 400); $i++) {
            $givenName = $this->givenNames[rand(0, count($this->givenNames) - 1)];
            $surname = $this->surnames[rand(0, count($this->surnames) -1 )];
            $email = $givenName . (rand(1, 2) % 2 == 0 ? '.' : '_') . $surname . rand(1, 1000) . '@example.com';

            if (isset($usedEmails[$email])) {
                continue;
            }
            $usedEmails[$email] = $email;
            DB::table('users')->insert([
                'name' => $givenName . ' ' . $surname,
                'email' => $email,
                'password' => bcrypt($givenName . $surname)
            ]);
        }
    }
}
