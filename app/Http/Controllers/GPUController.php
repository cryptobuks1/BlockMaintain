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

    public function show(GPU $GPU)
    {
        return $GPU;
    }

    public function store(Request $request)
    {
        $GPU = GPU::create($request->all());

        return response()->json($GPU, 201);
    }

    public function update(Request $request, GPU $GPU)
    {
        $GPU->update($request->all());

        return response()->json($GPU, 200);
    }

    public function delete(GPU $GPU)
    {
        $GPU->delete();

        return response()->json(null, 204);
    }
}
