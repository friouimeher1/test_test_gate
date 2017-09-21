<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('technicien')->user();

    //dd($users);

    return view('technicien.home');
})->name('home');

