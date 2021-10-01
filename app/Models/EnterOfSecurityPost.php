<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnterOfSecurityPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'security_post_id'
    ];

    public function security_post()
   {
     return $this->belongsTo(SecurityPost::class);
   }


}
