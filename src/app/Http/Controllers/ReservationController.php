<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function add(Request $request, $id)
    {
        $items = $request->all();
        $items['datetime'] = $request->date .' '. $request->time;

        $query = Reservation::select('reservations.id', 'reservations.name', 'reservations.detail', 'reservations.picture', 'reservations.area_id', 'reservations.genre_id');
        $query->join('shops', 'reservations.shop_id', '=', 'shops.id')
            ->join('clients', 'reservations.client_id', '=', 'clients.id');

        Reservation::create([
            'number' => $request->input('number'),
            'datetime' => $items[ 'datetime' ],
            'shop_id' => $items[ 'shop_id' ],
            'client_id' => $items[ 'client_id' ]
        ]);

        return view('done');
    }
}
