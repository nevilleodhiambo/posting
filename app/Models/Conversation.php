<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    public function jobSeeker(){
        return $this->belongsTo(User::class, 'seeker_id');
    }
    public function Job(){
        return $this->belongsTo(User::class, 'emp_id');
    }
    public function messages(){
        return $this->hasMany(Message::class,'conversation_id');
    }
    public function jobs(){
        return $this->belongsTo(Job::class);
    }
    public function seeker(){
        return $this->belongsTo(seeker::class);
    }
}
