<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'title', 'description', 'start_time', 'end_time', 'is_all_day', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
