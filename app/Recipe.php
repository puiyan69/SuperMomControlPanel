<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['image', 'name', 'instructions', 'ingredients', 'descriptions'];
    
}
