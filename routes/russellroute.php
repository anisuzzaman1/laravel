<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/russell', function () {
    #app()->make('fist_service_provider');
    #return "Russell's Place";
    return view('russell');
});
