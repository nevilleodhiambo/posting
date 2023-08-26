<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'day',
        'month',
        'year',
        'gender',
        'nationality',
        'location',
        'number',
        'qualification',
        'experience',
        'job',
        'availability'
    ];
}
