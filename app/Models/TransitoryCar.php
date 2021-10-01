<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransitoryCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'number',
        'type',
        'body',
        'color',
        'transitory_user_id',
    ];

    /**
     * @return mixed
     */
    public function pass()
    {
      return $this->morphMany(Entrance::class, 'visitor');
    }

    public function user()
    {
      return $this->belongsTo(TransitoryUser::class, 'transitory_user_id');
    }
}
