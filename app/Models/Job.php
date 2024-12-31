<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title',
        'description',
        'company',
        'location',
        'type',
        'salary',
        'is_active'
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
