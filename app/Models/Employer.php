<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable  = [
        'fname',
        'lname',
        'email',
        'password',
        'position',
        'phone',
        'cname',
        'industry',
        'employeescount',
        'hear',
        'contact',
        'wemail'
    ];
}
