<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogOfSecurityPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'security_post_id',
        'enter_of_security_post_id',
        'user_id'
    ];

    public function security_post()
   {
     return $this->belongsTo(SecurityPost::class);
   }

      public function securitie()
     {
       return $this->belongsTo(User::class, 'user_id');
     }

     public function enter()
    {
      return $this->belongsTo(EnterOfSecurityPost::class,'enter_of_security_post_id');
    }
}
