<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumUser extends Model
{
    protected $fillable = ['username','email', 'password'];
}
