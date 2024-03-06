<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'cover_image', 'content', 'group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }
}

