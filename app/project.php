<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'project';

    protected $fillable = [
        'name', 'image','desc'
    ];
}
