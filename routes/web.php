<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
//use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CommunicationLogController;
use App\Http\Controllers\ProductCategoryController;

use App\Http\Controllers\PayPalController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\UserDashboardController;

use App\Enums\Role;



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




Route::get('/', function () {
    return view('home');
});



Route::get('/about', function () {
    return view('about');
});


Route::get('/services', function () {
    return view('services');
});



Route::get('aa', function () {
    return view('aa');
});


Route::get('/Services', function () {
    return view('Services');
});


Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
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

//    Route::resource('product-category', \App\Http\Controllers\ProductCategoryController::class);

//    Route::resource(
//        'user',
//        \App\Http\Controllers\UserController::class,
//
//    );



});




//Route::resource(
//    'campaign',
//    \App\Http\Controllers\CampaignController::class
//);

//Route::resource('clients', ClientController::class);




Route::middleware(['admin']) ->group(function () {
    Route::resource('clients', ClientController::class);
    Route::resource('user', UserController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('campaign', \App\Http\Controllers\CampaignController::class);
    Route::resource('communication-logs', CommunicationLogController::class);
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard') ->middleware('auth');
    Route::resource('product-category', \App\Http\Controllers\ProductCategoryController::class);
    Route::get('/analysis', [AnalysisController::class, 'showDashboard'])->name('analysis.dashboard');


});

//Route::resource('projects',
//    ProjectController::class
//);


//Route::resource('communication-logs', CommunicationLogController::class);



//Route::get('paypal/create-payment', [PayPalController::class, 'createPayment'])->name('paypal.createPayment');
//Route::get('paypal/execute-payment', [PayPalController::class, 'executePayment'])->name('paypal.executePayment');
//Route::get('paypal/cancel-payment', [PayPalController::class, 'cancelPayment'])->name('paypal.cancelPayment');




Route::get('/paypal-test-checkout', [PayPalController::class, 'createTransaction'])->name('paypal.test_checkout');
Route::post('/paypal-test-process', [PayPalController::class, 'processTransaction'])->name('paypal.process_transaction');
Route::get('/paypal-test-success', [PayPalController::class, 'captureTransaction'])->name('paypal.capture_transaction');

//Route::get('/analytics', [App\Http\Controllers\AnalyticsController::class, 'index']);


//Route::resource('analytics',
//    AnalyticsController::class
//);







//Route::post('/consultation-request', [ConsultationRequestController::class, 'store'])->name('consultation-request.store');



//consultation request
//Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard') ->middleware('auth');





// Route for the consultation request form submission
//Route::post('/consultation-request', [ConsultationRequestController::class, 'store'])->name('consultation-request.store');

// Route for the Thank You page
Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');




//Route::get('/analysis', [AnalysisController::class, 'showDashboard'])->name('analysis.dashboard');


//
//Route::group(['middleware' => ['role:' . Role::SuperAdministrator->name]], function () {
//    Route::get('/admin', function () {
//        // Only accessible by users with the SuperAdministrator role
//    });
//});
//
//Route::group(['middleware' => ['permission:edit articles']], function () {
//    Route::get('/edit-article', function () {
//        // Only accessible by users with the edit articles permission
//    });
//});
//



//Route::post('/subscribe', [PayPalController::class, 'subscribe'])->name('paypal.subscribe');
//Route::get('/paypal/success', [PayPalController::class, 'success'])->name('paypal.success');
//Route::get('/paypal/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
});




//customer dashboard
//
//Route::middleware(['auth'])->group(function () {
//    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
//});


//Route::get('/consultation-request', [ConsultationRequestController::class, 'create'])->name('consultation-request.create');
//Route::post('/consultation-request', [ConsultationRequestController::class, 'store'])->name('consultation-request.store');
