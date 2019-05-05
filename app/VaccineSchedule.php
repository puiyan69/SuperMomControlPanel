<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaccineSchedule extends Model
{
    protected $fillable = ['vaccine_name', 'vaccine_date', 'baby_id'];
}
