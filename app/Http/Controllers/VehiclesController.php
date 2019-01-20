<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function index()
    {
        return Vehicles::all();
    }
 
    public function show($id)
    {
        return Vehicles::find($id);
    }

    public function store(Request $request)
    {
        return Vehicles::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $car = Vehicles::findOrFail($id);
        $car->update($request->all());

        return $car;
    }

    public function delete(Request $request, $id)
    {
        $car = Vehicles::findOrFail($id);
        $car->delete();

        return 204;
    }
}
