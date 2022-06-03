<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Genre;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops'; 
    protected $fillable = [
        'name',
        'detail',
        'picture',
        'area_id',
        'genre_id'
    ];

    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
}
