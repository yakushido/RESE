<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function show()
    {
        $date = $request->input('date');
        $time = $request->input('time');
        $number = $request->input('number');

        return redirect()
            ->route('shops.detail') 
            ->with(compact('date', 'time', 'number'));
    }

    public function add(Request $request)
    {
        $items = $request->all();
        $items['datetime'] = $request->date;
        Reservation::create([
            'number' => $request->input('number'),
            'datetime' => $items[ '' ],
            'shop_id' => $items[ '' ],
            'client_id' => $items[ '' ]
        ]);

        return view('');
    }
}
