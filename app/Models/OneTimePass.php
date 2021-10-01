<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class OneTimePass extends Model
{
    use HasFactory;

    protected $fillable = [
        'entry',
        'exit',
        'type',
        'visitor_type',
        'visitor_id',
    ];

    protected $dates = ['entry', 'exit'];

    public function setEntryAttribute ($date){
      $this->attributes['entry'] = Carbon::parse($date);
    }

    public function entrance()
    {
      return $this->morphMany(Entrance::class, 'pass');
    }

    public function visitor(){
      return $this->morphTo();
    }
}
