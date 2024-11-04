<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];

    public function scopeSearch($query) {
        $query->where('user_id', '=', auth()->id());
    }

    public function user() {
        return $this->belongTo(User::class);
    }
}
