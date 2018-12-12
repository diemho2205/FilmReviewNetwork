<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\Comment;
use App\User;

class Review extends Model
{
    protected $fillable = [
        'name',
        'content',
        'poster',
        'character',
        'feeling',
        'rate'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
