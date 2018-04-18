<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cryptocurrency extends Model
{
    //
    protected $fillable = ['name', 'type', 'value'];

    public static function store_values(){


        $json_data = file_get_contents("https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,XMR&tsyms=CAD");

        $data = json_decode($json_data);

        //API key information
        //https://www.coinwarz.com/v1/api/apikeyinfo?apikey=env("COINWARZ_API_KEY")

        //Coin Profitability
        //http://www.coinwarz.com/v1/api/profitability/?apikey=YOUR_API_KEY&algo=all
//        {"Success":true,"Message":"1,000 api calls remaining.","Data":{"ApiKey":"2aefebfba0a14c1284180de336ec2be3","AccessLevel":"Free","ApiUsageLimit":1000,"ApiUsageAvailable":1000,"DailyUsageLimit":25,"DailyUsageAvailable":25,"Approved":true}}


        for($i=0;$i<count($data);$i++){
            \App\Cryptocurrency::create([
                'name' => $faker->firstName,
                'type' => $faker->word,
                'value' => $faker->numberBetween(0,100),
            ]);
        }


        print_r($data);
    }
}
