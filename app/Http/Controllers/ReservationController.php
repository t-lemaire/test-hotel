<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function list()
    {
        return 'My Reservations';
    }

    public function create()
    {
        return 'Create Reservation';
    }

    public function delete()
    {
        return 'Delete Reservation';
    }

    public function update()
    {
        return 'Update Reservation';
    }
}
