<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function list(User $user, int $page = null)
    {
        $itemsPerPage = 25;
        $itemsPerPage = 2;//@TODO: Remove this line.

        if (empty($page) || (int)$page < 0) {
            $page = 1;
        }

        $reservations = $user->reservations()
            ->orderBy('from_date', 'asc')
            ->orderBy('to_date', 'asc')
            ->forPage($page, $itemsPerPage);

        $paginationFrom = $page - 3 > 0 ? $page - 3 : 1;
        $paginationTo = (int)(ceil($reservations->count() / $itemsPerPage));
        $paginationTo = $paginationTo - $paginationFrom > 3 ? $paginationFrom + 3 : $paginationTo;

        $data = [
            'user' => $user,
            'page' => $page,
            'reservations' => $reservations,
            'paginationFrom' => $paginationFrom,
            'paginationTo' => $paginationTo
        ];
dd($data, $itemsPerPage, $reservations->count(), $reservations->get());
        return view('reservations.list', $data);
    }

    public function create()
    {
        return 'Create Reservation';
    }

    public function store()
    {
        return 'Store Reservation';
    }

    public function delete()
    {
        return 'Delete Reservation';
    }

    public function update()
    {
        return 'Update Reservation';
    }

    public function view()
    {
        return 'View Reservation';
    }
}
