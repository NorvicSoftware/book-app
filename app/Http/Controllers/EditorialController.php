<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editorials = Editorial::all();
        return view('editorials.index', ['editorials' => $editorials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('editorials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion previa antes de almacenar a mi base de datos
        $request->validate(
            [
                'name' => 'required|max:50|min:5',
                'address' => 'max:250',
                'phone' => 'max:15'
            ]
        );

        $editorial = new Editorial();
        $editorial->name = $request->name;
        $editorial->address = $request->address;
        $editorial->phone = $request->phone;
        $editorial->save();
        return redirect()->action([EditorialController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editorial = Editorial::find($id);
        return view('editorials.edit', ['editorial' => $editorial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editorial =  Editorial::find($id);
        $editorial->name = $request->name;
        $editorial->address = $request->address;
        $editorial->phone = $request->phone;
        $editorial->save();

        return redirect()->action([EditorialController::class, 'index']);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
