<?php

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

    Route::resource(
        'product-category',
        \App\Http\Controllers\ProductCategoryController::class
    );

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class,

    );



});





//
//Route::get('/campaigns', [CampaignController::class, 'index']);
//Route::get('/campaigns/create', [CampaignController::class, 'create']);
//Route::post('/campaigns', [CampaignController::class, 'store']);
//Route::get('/campaigns/{campaign}', [CampaignController::class, 'show']);
//Route::get('/campaigns/{campaign}/edit', [CampaignController::class, 'edit']);
//Route::put('/campaigns/{campaign}', [CampaignController::class, 'update']);
//Route::delete('/campaigns/{campaign}', [CampaignController::class, 'destroy']);
//



//Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('campaign.create');
//Route::get('/campaigns', [CampaignController::class, 'store'])->name('campaigns.store');


//Route::get('/campaign/{id}', [CampaignController::class, 'show'])->name('campaign.show');
//
//
//Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns.index');
//
//Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('campaigns.create');
//
//
//
//Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('campaigns.create');
//Route::get('/campaigns/edit', [CampaignController::class, 'edit'])->name('campaign.edit');
//Route::get('/campaigns/destroy', [CampaignController::class, 'destroy'])->name('campaign.destroy');
//Route::get('/campaigns/store', [CampaignController::class, 'store'])->name('campaign.store');
//
//
//Route::resource('campaigns', CampaignController::class);


//
//// Display a listing of the campaigns
//Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaign.index');
//
//// Show the form for creating a new campaign
////Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('campaigns.create');
//Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('campaign.create');
//
//
//// Store a newly created campaign in storage
//Route::post('/campaigns/{campaign}', [CampaignController::class, 'store'])->name('campaign.store');
//
//
//// Display the specified campaign
//Route::get('/campaigns/{campaign}', [CampaignController::class, 'show'])->name('campaigns.show');
//
//// Show the form for editing the specified campaign
//Route::get('/campaigns/{campaign}/edit', [CampaignController::class, 'edit'])->name('campaigns.edit');
//
//// Update the specified campaign in storage
//Route::put('/campaigns/{campaign}', [CampaignController::class, 'update'])->name('campaigns.update');
//
//// Remove the specified campaign from storage
//Route::delete('/campaigns/{campaign}', [CampaignController::class, 'destroy'])->name('campaigns.destroy');
//
//


Route::resource(
    'campaign',
    \App\Http\Controllers\CampaignController::class
);

Route::resource('clients',
    ClientController::class
);


Route::resource('projects',
    ProjectController::class
);


Route::resource('communication-logs',
    CommunicationLogController::class
);



//Route::get('paypal/create-payment', [PayPalController::class, 'createPayment'])->name('paypal.createPayment');
//Route::get('paypal/execute-payment', [PayPalController::class, 'executePayment'])->name('paypal.executePayment');
//Route::get('paypal/cancel-payment', [PayPalController::class, 'cancelPayment'])->name('paypal.cancelPayment');




Route::get('/paypal-test-checkout', [PayPalController::class, 'createTransaction'])->name('paypal.test_checkout');
Route::post('/paypal-test-process', [PayPalController::class, 'processTransaction'])->name('paypal.process_transaction');
Route::get('/paypal-test-success', [PayPalController::class, 'captureTransaction'])->name('paypal.capture_transaction');

//Route::get('/analytics', [App\Http\Controllers\AnalyticsController::class, 'index']);


Route::resource('analytics',
    AnalyticsController::class
);



// routes/web.php



Route::post('/consultation-request', [ConsultationRequestController::class, 'store'])->name('consultation-request.store');


// routes/web.php

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


// Route for the consultation request form submission
//Route::post('/consultation-request', [ConsultationRequestController::class, 'store'])->name('consultation-request.store');

// Route for the Thank You page
Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');




Route::get('/analysis', [AnalysisController::class, 'showDashboard'])->name('analysis.dashboard');



Route::group(['middleware' => ['role:' . Role::SuperAdministrator->name]], function () {
    Route::get('/admin', function () {
        // Only accessible by users with the SuperAdministrator role
    });
});

Route::group(['middleware' => ['permission:edit articles']], function () {
    Route::get('/edit-article', function () {
        // Only accessible by users with the edit articles permission
    });
});




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
