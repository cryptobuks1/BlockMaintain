<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GPU extends Model
{
    //
    protected $fillable = ['name', 'hashes_per_second'];
}
