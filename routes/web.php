<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        'request()->ip()' => request()->ip(),
        'request()->ips()' => request()->ips(),
    ];
});
