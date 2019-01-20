<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;

class CompaniesController extends Controller
{
    public function index()
    {
        return Companies::all();
    }
 
    public function show($id)
    {
        return Companies::find($id);
    }

    public function store(Request $request)
    {
        return Companies::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $company = Companies::findOrFail($id);
        $company->update($request->all());

        return $company;
    }

    public function delete(Request $request, $id)
    {
        $company = Companies::findOrFail($id);
        $company->delete();

        return 204;
    }
}
