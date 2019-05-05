<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BabyFood extends Model
{
    protected $fillable = ['name', 'suitableAge', 'ingredients', 'instructions', 'descriptions', 'image'];
}
