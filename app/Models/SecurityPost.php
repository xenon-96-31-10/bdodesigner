<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecurityPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'project_group_id'
    ];

    public function securities()
   {
     return $this->hasMany(User::class);
   }

   public function enters()
  {
    return $this->hasMany(EnterOfSecurityPost::class);
  }

   public function project_group()
  {
    return $this->belongsTo(ProjectGroup::class);
  }

  public function securitie()
   {
     return $this->belongsToMany(User::class,'security_post_user');
   }

 public function log()
  {
    return $this->hasMany(LogOfSecurityPost::class);
  }

}
