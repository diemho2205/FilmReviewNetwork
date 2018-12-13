<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ConnectionRequest extends Model
{
    const SENT = 1;
    const ACCEPTED = 2;
    const REJECTED = 3;

    protected $fillable = [
        'from_id',
        'to_id',
        'status',
    ];

    public function sender() {
        return $this->belongsTo(User::class, 'from_id');
    }

    public function receiver() {
        return $this->belongsTo(User::class, 'to_id');
    }
}
