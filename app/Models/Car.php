<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'number',
        'type',
        'body',
        'color',
        'user_id',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
