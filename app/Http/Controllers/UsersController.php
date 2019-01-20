<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return Users::all();
    }
 
    public function show($id)
    {
        return Users::find($id);
    }

    public function store(Request $request)
    {
        return Users::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Users = Users::findOrFail($id);
        $Users->update($request->all());

        return $Users;
    }

    public function delete(Request $request, $id)
    {
        $Users = Users::findOrFail($id);
        $Users->delete();

        return 204;
    }
}
