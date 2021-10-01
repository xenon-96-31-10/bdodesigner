<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Bio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'surname',
        'sex',
        'dateofbirth',
        'user_id',
    ];

    protected $dates = ['dateofbirth'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

}
