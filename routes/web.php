<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('taghreed',function(){
//     return 'Welcome to My First-website';
// });

// Route::get('taghreed/{id}',function($id){
//     return 'Welcome to My First-website ' .$id;
// });
