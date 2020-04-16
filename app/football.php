<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class football extends Model
{
    protected $table = 'footballs';

    protected $fillable = [
      "clubname",
      "points",
    ];

    protected $hidden = [
      'id', 'created_at', 'updated_at'
    ];
}
