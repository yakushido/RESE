<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;
use App\Models\Client;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'datetime',
        'shop_id',
        'client_id'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
