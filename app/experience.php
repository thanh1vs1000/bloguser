<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $table = 'experience';

    protected $fillable = [
        'company', 'time','position','desc'
    ];
}
