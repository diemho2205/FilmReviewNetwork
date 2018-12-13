<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;

class Review extends Model
{
    protected $fillable = [
        'user_id',
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

    public function getLikedByAuthUserAttribute()
    {
        $user_id = Auth::id();
        $like = Like::where('user_id', $user_id)
            ->where('review_id', $this->id)
            ->first();
        if ($like) {
            if ($like->is_disliked) {
                return false;
            } else {
                return true;
            }
        }
        
        return false;
    }
}
