<?php

use Illuminate\Support\Facades\Route;


Route::get('error-login', function () {
    return response()->json(['error' => 'You don\'t have access'], 401);
});

Route::get('/{slug?}/{param?}/{param2?}/{param3?}', function () {
    return view('index');
});
