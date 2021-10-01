<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogOfEntrance extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'type',
        'user_id',
        'entrance_id',
    ];

    public function entrance()
    {
      return $this->belongsTo(Entrance::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
