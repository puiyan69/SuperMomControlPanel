<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostnatalFitness extends Model
{
    protected $fillable = ['image', 'infoType', 'title', 'content'];
}
