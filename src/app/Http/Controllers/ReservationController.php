<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function add(Request $request)
    {
        // dd(Auth::user()->id);
        Reservation::create([
            'number' => $request->number,
            'date' => $request->date,
            'time' => $request->time,
            'shop_id' => $request->shop_id,
            'user_id' => Auth::id()
        ]);

        return redirect('/done');
    }

    public function done()
    {
        return view('done');
    }

    public function delete($id)
    {
        Reservation::where('id', $id)->delete();
        return redirect()->back();
    }
}
