<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'event',
        'weight',
        'number',
        'set',
        'user_id',
    ];

    public function scopeSearch($query) {
        $query->where('user_id', '=', auth()->id());
    }

    public function scopeDateSearch($query, $date, $event) {
        $query->where('user_id', '=', auth()->id());
        if($date) {
            $query->whereDate('created_at', $date);
        }
        
        if($event) {
            $query->where('event', $event);
        }
    }

    public function user() {
        return $this->belongTo(User::class);
    }
}
