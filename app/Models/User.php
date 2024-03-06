<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'group_id', 'role'
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}

