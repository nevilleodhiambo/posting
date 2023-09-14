<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'end_date',
        'job_title',
        'company',
        'skills',
        'graduation_date',
        'degree',
        'major',
        'project_name',
        'project_description',
        'summary',
        'user_id'
    ];
    public function seeker(){
        return $this->belongsTo(seeker::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
