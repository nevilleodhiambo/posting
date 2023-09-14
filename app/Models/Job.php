<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'skills',
        'qualification',
        'coinfo',
        'salary',
        'approved',
        'emp_id',
        
    ];
    public function application(){
        return $this->hasMany(Application::class);
    }
    public function Employer(){
        return $this->belongsTo(Employer::class, 'emp_id');
    }
    public function User(){
        return $this->belongsTo(User::class, 'emp_id');
    }
    public function conversation(){
        return $this->hasMany(Conversation::class);
    }
    public function message(){
        return $this->hasMany(Job::class, 'emp_id');
    }
    public function applicationCount(){
        return $this->application()->count();
    }
}
