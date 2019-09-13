<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',

            //Belongs to many relations
            'roles' => 'Roles',

        ],
    ],

    'room' => [
        'title' => 'Rooms',

        'actions' => [
            'index' => 'Rooms',
            'create' => 'New Room',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'floor' => 'Floor',
            'room_number' => 'Room number',
            'description' => 'Description',
            'out_of_order' => 'Out of order',

        ],
    ],

    'reservation' => [
        'title' => 'Reservations',

        'actions' => [
            'index' => 'Reservation',
            'create' => 'New Reservation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'user_id' => 'User ID',
            'room_id' => 'Room ID',
            'from_date' => 'From Date',
            'to_date' => 'To Date',

        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'name' => 'Name',
            'email_verified_at' => 'E-mail Verified At',

            //Belongs to many relations
            'roles' => 'Roles',

        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
