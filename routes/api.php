<?php

use Illuminate\Http\Request;
use App\Users;
use App\Companies;
use App\Vehicles;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Users::all();
});
 
Route::get('users/{id}', function($id) {
    return Users::find($id);
});

Route::post('users', function(Request $request) {
    return Users::create($request->all);
});

Route::put('users/{id}', function(Request $request, $id) {
    $user = Users::findOrFail($id);
    $user->update($request->all());

    return $user;
});

Route::delete('users/{id}', function($id) {
    Users::find($id)->delete();

    return 204;
});

Route::get('companies', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Companies::all();
});
 
Route::get('companies/{id}', function($id) {
    return Companies::find($id);
});

Route::post('companies', function(Request $request) {
    return Companies::create($request->all);
});

Route::put('companies/{id}', function(Request $request, $id) {
    $company = Companies::findOrFail($id);
    $company->update($request->all());

    return $company;
});

Route::delete('companies/{id}', function($id) {
    Companies::find($id)->delete();

    return 204;
});

Route::get('vehicles', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Vehicles::all();
});
 
Route::get('vehicles/{id}', function($id) {
    return Vehicles::find($id);
});

Route::post('vehicles', function(Request $request) {
    return Vehicles::create($request->all);
});

Route::put('vehicles/{id}', function(Request $request, $id) {
    $company = Vehicles::findOrFail($id);
    $company->update($request->all());

    return $company;
});

Route::delete('vehicles/{id}', function($id) {
    Vehicles::find($id)->delete();

    return 204;
});