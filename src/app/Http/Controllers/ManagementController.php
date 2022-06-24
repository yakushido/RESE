<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Manager;

class ManagementController extends Controller
{
    public function show()
    {
        $shops = Shop::all();
        $managers = Manager::all();
        return view('admin',compact('shops','managers'));
    }

    public function add(Request $request)
    {
        Manager::create([
            'name' => $request->manager_name,
            'shop_id' => $request->shop_name
        ]);
        return redirect('/admin');
    }
}
