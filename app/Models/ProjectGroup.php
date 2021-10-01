<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function securitypost()
    {
      return $this->hasOne(SecurityPost::class);
    }

    public function projects()
    {
      return $this->hasMany(Project::class);
    }
}
