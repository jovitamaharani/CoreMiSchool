<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});

Route::get('rfid-registration', function(){
    return view('admin.pages.absensi.registrasi-rfid');
});