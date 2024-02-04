<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





/*Route::get('/', function () {
    return view('welcome'); 
});


Route::get('l',function(){
    return view('bts');
});



    Route::get('WelcomePPP', function () {
        return view('WelcomePage', [
           'name' => 'Runi',
           'age' => 18,
           'address'=> '43/2 , Jaela'
        ]);
});

*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});



Route::get('/about', function () {
    return view('about');
});


Route::get('/services', function () {
    return view('services');
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource(
        'product-category',
        \App\Http\Controllers\ProductCategoryController::class
    );

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class,
        
    );

   
    
});




Route::get('aa', function () {
    return view('aa');
});
