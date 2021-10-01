<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'region',
        'city',
        'street',
        'numberofhouse',
        'numberofroom',
        'totalarea',
        'livingarea',
        'typeofproject_id',
        'organization_id',
        'status_id',
        'project_group_id',
    ];

    public function status()
    {
      return $this->belongsTo(Status::class);
    }

    public function users()
    {
      return $this->belongsToMany(User::class,'projects_users');
    }

    public function counters()
    {
      return $this->hasMany(Counter::class);
    }

    public function entrances()
    {
      return $this->hasMany(Entrance::class);
    }

    public function typeofproject()
    {
      return $this->belongsTo(TypeOfProject::class);
    }

    /**
     * @return mixed
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function project_group()
   {
     return $this->belongsTo(ProjectGroup::class);
   }
}
