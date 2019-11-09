<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tidings extends Model
{
    protected $fillable = [
        'title', 'content'
    ];
}
