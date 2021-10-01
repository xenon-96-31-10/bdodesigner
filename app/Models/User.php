<?php

namespace App\Models;

use App\Traits\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return mixed
     */
    public function bio()
    {
       return $this->hasOne(Bio::class);
    }

    /**
     * @return mixed
     */
    public function cars()
    {
      return $this->hasMany(Car::class);
    }

    /**
     * @return mixed
     */
    public function logs()
    {
      return $this->hasMany(Log::class);
    }

    /**
     * @return mixed
     */
    public function projects()
    {
      return $this->belongsToMany(Project::class,'projects_users');
    }

    /**
     * @return mixed
     */
    public function entrances()
    {
      return $this->hasMany(Entrance::class, 'user_id');
    }

    /**
     * @return mixed
     */
    public function activities()
    {
        return $this->belongsToMany(Activiti::class,'activitis_users');
    }

    /**
     * @return mixed
     */
    public function organization()
    {
        return $this->belongsToMany(Organization::class,'organizations_users');
    }

    /**
     * @return mixed
     */
    public function equipments()
    {
      return $this->belongsToMany(Equipment::class,'equipment_users');
    }

    public function group()
    {
        return $this->belongsToMany(Group::class,'group_user');
    }

    public function family()
    {
        return $this->belongsToMany(Family::class,'family_user');
    }

    public function avatar()
    {
       return $this->hasOne(Avatar::class);
    }

    public function documents()
    {
      return $this->hasMany(Document::class);
    }

    public function passport()
    {
      return $this->hasMany(Document::class)->where('name', 'Паспорт')->first();
    }

    /**
     * @return mixed
     */
    public function mechanizms()
    {
      return $this->hasMany(Mechanizm::class, 'user_id');
    }

    public function security_post()
   {
     return $this->belongsToMany(SecurityPost::class,'security_post_user');
   }
   public function get_security_post()
  {
    return $this->belongsToMany(SecurityPost::class,'security_post_user')->first();
  }
  public function get_guard_status()
   {
     return $this->hasMany(LogOfSecurityPost::class)->latest()->first();
   }
}
