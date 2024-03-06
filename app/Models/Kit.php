<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    protected $fillable = ['name', 'description'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}

