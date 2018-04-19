<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GPU extends Model
{
    //
    protected $fillable = ['name', 'hashes_per_second'];

    //anything with 0 is not effective with GPU's or no relevant data found

    //all are in kh/s
    public static $algo_1060_hashrate = array(
        'ETHASH'=> 22500,
        'GROESTL'=>20500,
        'X11'=>7200,
        'SHA-256'=>0,
        'SCRYPT'=>0,
        'QUARK'=>0,
        'NEOSCRYPT'=>620,
        'LYRA2REV2'=>20300,
        'EQUIHASH'=>0.27,
        'CRYPTONIGHTV7'=>0.43,
        'BLAKE-256'=>0
    );

    public static $algo_570_hashrate = array(
        'ETHASH'=> 27900,
        'GROESTL'=>15500,
        'X11'=>5600,
        'SHA-256'=>0,
        'SCRYPT'=>0,
        'QUARK'=>0,
        'NEOSCRYPT'=>700,
        'LYRA2REV2'=>5500,
        'EQUIHASH'=>0.26,
        'CRYPTONIGHTV7'=>0.87,
        'BLAKE-256'=>0
    );
}
