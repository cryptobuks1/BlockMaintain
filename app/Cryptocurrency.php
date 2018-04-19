<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Cryptocurrency extends Model
{
    //
    protected $fillable = ['symbol','difficulty','algorithm','name', 'type', 'value'];
    public $primarykey = 'symbol';

    public static function store_values(){

        //Coin Values in CAD
        $json_data = file_get_contents("https://min-api.cryptocompare.com/data/pricemulti?fsyms=ETH,ETC,ZEC,ZEN,BTG,XMR,ORK,XJO,DASH,CANN,START,MUE,FTC,VTC,PXC,MONA,ORB,NOTE,BCH,DEM,BTC,EMC2,GAME,PPC,DGB,NLG,BLC,LTC,TGC,XVG,SXC,ARI,FLO,BTB,NVC,CAT,NYAN,GRS,AUR,OTL,MEC,EMD,SPT,WDC,DOGE,BTA,VIA,UNB,CURE,ACOIN,MZC,CRW,UNO,TRC,NMC&tsyms=CAD");
        $json_data= json_decode($json_data);

//        foreach($json_data as $key=>$value){
//            DB::table('cryptocurrencies')
//                ->where('symbol', $key)
//                ->update(array('value' => $value->CAD));
//        }



        //API key information
        //https://www.coinwarz.com/v1/api/apikeyinfo?apikey=env("COINWARZ_API_KEY")

        //Coin Profitability
        //$json_data = file_get_contents("http://www.coinwarz.com/v1/api/profitability/?apikey=".env("COINWARZ_API_KEY")."&algo=all");
        //$json_data = json_decode($json_data);

//        if(isset($json_data->Success) && $json_data->Success==1){
//            foreach($json_data->Data as $coin){
//
//                \App\Cryptocurrency::create([
//                    'symbol' => $coin->CoinTag,
//                    'name' => $coin->CoinName,
//                    'difficulty' => $coin->Difficulty,
//                    'algorithm' => $coin->BlockReward,
//                    'value' => 0,
//                ]);
//            }
//        }


    }
}
