<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function shops()
    {
        $items = Shop::all();
        return view('shop',['items' => $items]);
    }
}
