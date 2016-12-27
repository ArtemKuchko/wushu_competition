<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    //данные соревнований
    protected $fillable = ['name', 'place', 'date_start', 'date_end', 'dead_line', 'level', 'description'];
	

}
