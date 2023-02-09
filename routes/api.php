<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/', function(){
        return response()->json([
            'status' => 'sucesso',
            'version' => 'v1',
            'baseUrl' => 'http://localhost:9001/api/v1'
        ], 200);
    });
});

