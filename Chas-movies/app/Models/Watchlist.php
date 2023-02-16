<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Watchlist extends Model
{
    use HasFactory;


    /**
     * The Watchlists that can have many films
     */
    public function film()
    {
        return $this->hasMany(Film::class);
    }

    /**
     * The Watchlists that can have many shows
     */
    public function shows()
    {
        return $this->hasMany(Film::class);
    }


        /**
     * Get the user that owns the watchlist.
     */
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
