<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('taghreed',function(){
//     return 'Welcome to My First-website';
// });

// Route::get('taghreed/{id}',function($id){
//     return 'Welcome to My First-website ' .$id;
// });

// Route::get('taghreed/{id?}',function($id=209){
//     return "welcome".$id;
// })->where(['id'=>'[0-9]+']);

// Route::get('taghreed/{id?}',function($id=209){
//     return "welcome".$id;
// })->whereNumber('id');

Route::get('course/{name}',function($name){
    return "welcome to ".$name ." course";
})->whereAlpha('name');
//////////////////////////////////////////////////
Route::get('course/{name}',function($name){
    return "welcome to ".$name ." course";
})->whereIn('name',['php','java']);

// /////////////////////////////////////////////
Route::prefix('cars')->group(function(){
    Route::get('bmw',function(){
        return 'category is bmw';
    });
    Route::get('marcedees',function(){
        return 'category is marcedees';
    });

});
//////////////////////////////////////////////////////

// Route::fallback(function(){
//     return redirect('/');
// });

//////////////////////////////////////////////////
// Route::get('taghreedFiles',function(){
//      return view('test');
// });

// Route::get('taghreedForms',function(){
//     return view('form1');
// });

// Route::post('recData',function(){
//     return 'data received';
// })->name('recForm1');
/////////////////////////////////////

// Route::get('test209',[Mycontroller::class,'my_data']);



////////////////////////////////task///////////////////////////////

Route::get('taghreedForms',function(){
    return view('form1');
});

Route::post('form',function(){
    return view('formData');
})->name('recForm1');

