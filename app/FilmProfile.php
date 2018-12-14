<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class FilmProfile extends Model
{
    protected $fillable = [
        'favourite_film',
        'favourite_character',
        'favorite_genre',
        'feeling',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
