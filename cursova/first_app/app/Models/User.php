<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    use HasFactory;
}
