<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class PersonalProfile extends Model
{
    protected $fillable = [
        'username',
        'avatar',
        'address',
        'phone',
        'birthday',
        'gender',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
