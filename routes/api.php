<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function(Request $request){
    return response()->json(['data'=>'tes'], 200);
});

Route::get('/find/name/{name}', function(Request $request, $name){
    return response()->json(['data'=>'tes', 'message' => "Hai $name"], 200);
});





