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

    public function show($id)
    {
        return Cryptocurrency::find($id);
    }

    public function store(Request $request)
    {
        return Cryptocurrency::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Cryptocurrency = Cryptocurrency::findOrFail($id);
        $Cryptocurrency->update($request->all());

        return $Cryptocurrency;
    }

    public function delete(Request $request, $id)
    {
        $Cryptocurrency = Cryptocurrency::findOrFail($id);
        $Cryptocurrency->delete();

        return 204;
    }
}
