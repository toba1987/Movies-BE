<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'director',
        'imageUrl',
        'duration',
        'releaseDate',
        'genres'
    ];

    //
    public function getGenresAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setGenresAttribute($value)
    {
        $this->attributes['genres'] = json_encode($value);
    }
    /* ovo zanjenuje gornje dve metode
    protected $casts = [
        'additional_data' => 'array'
    ];
    */

    public static function search($value){
        return self::where('name', 'like', "%$value%")->get();
    }
}
