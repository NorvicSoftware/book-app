<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BookController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editorial;

class ApiEditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editorials = Editorial::all();
        return response()->json($editorials);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $editorial = new Editorial();
        $editorial->name = $request->name;
        $editorial->address = $request->address;
        $editorial->phone = $request->phone;
        $editorial->save();
        return response()->json(['response' => 'La editorial fue registrada correctamente']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editorial = Editorial::find($id);

        $editorial->address = $request->address;
        $editorial->phone = $request->phone;
        $editorial->save();

        return response()->json(['response' => 'La editorial fue actualizada correctamente', 'status' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
