<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cryptocurrency extends Model
{
    //
    protected $fillable = ['name', 'type', 'value'];
}
