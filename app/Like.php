<?php

namespace App;

use App\User;
use App\Review;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'is_disliked',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function review() {
        return $this->belongsTo(Review::class);
    }
}
