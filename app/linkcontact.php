<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class linkcontact extends Model
{
    protected $table = 'linkcontact';

    protected $fillable = [
        'name', 'link'
    ];
}
