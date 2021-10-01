<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Inquirer extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'inquirer',
        'fio',
        'phone',
        'email',
        'files'
    ];
}
