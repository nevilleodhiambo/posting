<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_id',
         'seeker_id', 
         'resume', 
         'cover_letter'
        ];

        // protected $dispatchesEvents = [
        //     'created' => Application::class,
            // 'deleted' => JobApplicationDeleted::class,
        // ];
        

        public function seeker(){
            return $this->belongsTo(seeker::class,  'seeker_id');
        }
        public function job(){
            return $this->belongsTo(Job::class, 'job_id');
        }
        // public 
    
}
