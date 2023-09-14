<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class seeker extends Model
{
    use HasFactory, HasRoles;
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

    public function profile(){
        return $this->hasOne(Profile::class);
    }
    public function application(){
        return $this->hasOne(Job::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function conversation(){
        return $this->hasOne(Conversation::class);
    }
    public function app(){
        return $this->hasMany(Application::class);
    }

}
