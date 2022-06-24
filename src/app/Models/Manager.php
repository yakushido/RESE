<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shop_id'
    ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }
}
