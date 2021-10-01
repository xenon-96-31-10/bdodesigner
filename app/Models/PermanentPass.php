<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermanentPass extends Model
{
    use HasFactory;

    protected $fillable = [
        'timetable',
        'visitor_type',
        'type',
        'visitor_id',
    ];

    /**
     * @return mixed
     */
    public function entrance()
    {
      return $this->morphMany(Entrance::class, 'pass');
    }

    /**
     * @return mixed
     */
    public function visitor(){
      return $this->morphTo();
    }

    /**
     * @return mixed
     */
    public function dates()
    {
      return $this->hasMany(DateOfPermanentPass::class, 'pass_id');
    }
}
