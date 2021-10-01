<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransitoryDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'transitory_user_user_id',
    ];

    public function user()
    {
      return $this->belongsTo(TransitoryUser::class, 'transitory_user_id');
    }
}
