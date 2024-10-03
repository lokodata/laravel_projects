<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'slug', 'profile_photo_url', 'created_at', 'updated_at'
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function scheduleExclusions()
    {
        return $this->hasMany(ScheduleExclusion::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
