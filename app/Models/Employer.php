<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Employer extends Model
{
    use HasFactory, HasRoles;
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
        'wemail',
        'status'

    ];
    public function job(){
        return $this->hasMany(Job::class);
    }
}
