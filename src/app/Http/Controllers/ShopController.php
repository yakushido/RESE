<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;

class ShopController extends Controller
{
    
    // 飲食店一覧表示
    public function shops()
    {
        $items = Shop::all();
        $areas = Area::all();
        $genres = Genre::all();
        return view('shop',[
            'items' => $items,
            'areas' => $areas,
            'genres' => $genres]);
    }

    // 検索機能
    // public function serch()
    // {
    //     $allArea = $request->input('allArea');
    //     $allGenre = $request->input('allGenre');

    //     $query = Shop::query();
    //     $query->join('allArea',function($query) use ($request){
    //         $query->on('shops.area_id'.'=','areas.id');
    //     })->join('allGenre',function($query) use ($request){
    //         $query->on('shops.genre_id'.'=','genres.id');
    //     });

    //     if(!empty($allArea)) {
    //         $query->where('medium', '=', $allArea);
    //     }
    //     if(!empty($allGenre)) {
    //         $query->where('medium', '=', $allGenre);
    //     }

    //     $serches = $query->get();

    // 飲食店詳細表示
}
