<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransitoryUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'surname',
    ];

    /**
     * @return mixed
     */
    public function pass()
    {
      return $this->morphMany(Entrance::class, 'visitor');
    }

    /**
     * @return mixed
     */
    public function cars()
    {
      return $this->hasMany(TransitoryCar::class, 'transitory_user_id');
    }

    public function documents()
    {
      return $this->hasMany(TransitoryDocument::class);
    }

    public function passport()
    {
      return $this->hasMany(TransitoryDocument::class)->where('name', 'Паспорт')->first();
    }

    /**
     * @return mixed
     */
    public function mechanizms()
    {
      return $this->hasMany(TransitoryMechanizm::class, 'transitory_user_id');
    }
}
