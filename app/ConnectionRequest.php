<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ConnectionRequest extends Model
{
    protected $fillable = [
        'status',
    ];

    public function sender() {
        return $this->belongsTo(User::class, 'from_id');
    }

    public function receiver() {
        return $this->belongsTo(User::class, 'to_id');
    }
}
