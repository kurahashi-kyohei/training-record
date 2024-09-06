<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'event',
        'weight',
        'number',
        'set',
    ];

    public function scopeSearch($query, $date) {
        $query->whereDate('created_at', $date);
    }
}
