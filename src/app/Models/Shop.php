<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'picture',
        'area_id',
        'genre_id'
    ];

    // public function shops()
    // {
    //     return $this->belongsTo('App\Area');
    // }
}
