<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    protected $fillable = [
        'name',
    ];

    public function user() {
        return $this->belongTo(User::class);
    }
}
