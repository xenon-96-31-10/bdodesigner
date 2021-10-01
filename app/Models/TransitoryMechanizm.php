<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransitoryMechanizm extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'number',
        'name',
        'color',
        'tax_id',
        'transitory_user_id',
    ];

    /**
     * @return mixed
     */
    public function pass()
    {
      return $this->morphMany(Entrance::class, 'visitor');
    }

    public function tax()
    {
      return $this->belongsTo(Tax::class);
    }

    public function user()
    {
      return $this->belongsTo(TransitoryUser::class, 'transitory_user_id');
    }
}
