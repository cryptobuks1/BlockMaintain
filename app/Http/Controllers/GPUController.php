<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GPU;

class GPUController extends Controller
{
    //
    public function index()
    {
        return GPU::all();
    }

    public function show($id)
    {
        return GPU::find($id);
    }

    public function store(Request $request)
    {
        return GPU::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $GPU = GPU::findOrFail($id);
        $GPU->update($request->all());

        return $GPU;
    }

    public function delete(Request $request, $id)
    {
        $GPU = GPU::findOrFail($id);
        $GPU->delete();

        return 204;
    }
}
