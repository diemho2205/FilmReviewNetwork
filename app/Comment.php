<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Review;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'review_id',
        'content',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function review() {
        return $this->belongsTo(Review::class);
    }
}
