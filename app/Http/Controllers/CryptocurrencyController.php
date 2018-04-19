<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cryptocurrency;

class CryptocurrencyController extends Controller
{
    //
    public function index()
    {
        return Cryptocurrency::all();
    }

    public function show(Cryptocurrency $Cryptocurrency)
    {
        return $Cryptocurrency;
    }

    public function store(Request $request)
    {
        $Cryptocurrency = Cryptocurrency::create($request->all());

        return response()->json($Cryptocurrency, 201);
    }

    public function update(Request $request, Cryptocurrency $Cryptocurrency)
    {
        $Cryptocurrency->update($request->all());

        return response()->json($Cryptocurrency, 200);
    }

    public function delete(Cryptocurrency $Cryptocurrency)
    {
        $Cryptocurrency->delete();

        return response()->json(null, 204);
    }

    public function what_to_mine($gpu){
        return Cryptocurrency::what_to_mine($gpu);
    }
}
