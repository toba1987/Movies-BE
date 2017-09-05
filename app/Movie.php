<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
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
}
