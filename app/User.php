<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Review;
use App\PersonalProfile;
use App\Like;
use App\FilmProfile;
use App\Comment;
use App\ConnectionRequest;
use App\User;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function personalProfile() {
        return $this->hasOne(PersonalProfile::class);
    }

    public function filmProfile() {
        return $this->hasOne(FilmProfile::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function sentConnectionRequests() {
        return $this->hasMany(ConnectionRequest::class, 'from_id');
    }

    public function receivedConnectionRequests() {
        return $this->hasMany(ConnectionRequest::class, 'to_id');
    }

    public function sentMessages() {
        return $this->hasMany(Message::class, 'from_id');
    }

    public function receivedMessages() {
        return $this->hasMany(Message::class, 'to_id');
    }
}
