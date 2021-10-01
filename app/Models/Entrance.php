<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrance extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'pass_id',
        'pass_type',
        'project_id',
        'user_id',
    ];

    /**
     * @return mixed
     */
    public function log()
    {
      return $this->hasMany(LogOfEntrance::class);
    }

    /**
     * @return mixed
     */
    public function project()
    {
      return $this->belongsTo(Project::class);
    }

    /**
     * @return mixed
     */
    public function author()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return mixed
     */
    public function pass()
    {
      return $this->morphTo('pass');
    }

    /**
     * @return mixed
     */
    public function coments()
    {
      return $this->hasMany(PassesComent::class);
    }
}
