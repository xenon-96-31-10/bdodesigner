<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassesComent extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'entrance_id',
        'user_id'
    ];

    /**
     * @return mixed
     */
    public function entrance()
    {
      return $this->belongsTo(Entrance::class);
    }

    /**
     * @return mixed
     */
    public function author()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
