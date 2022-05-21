<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('Home');})->name('Home');
Route::get('/About', function () {return view('About');})->name('About');

Route::get('/Contact', function () {return view('Contact');})->name('Contact');
Route::post('/SaveContact',[FeedbackController::class,'store'])->name('SaveContact');


Route::middleware(['auth:sanctum','role:User|Employee|Admin',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

});
Route::middleware(['auth:sanctum','role:Admin',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('AddEmployee',[OfficeController::class,'index'])->name('AddEmployee');
    Route::post('storeAddEmployee',[OfficeController::class,'store'])->name('storeAddEmployee');

    Route::get('Mumber',[UserController::class,'index'])->name('Mumber');
    Route::post('DeleteMumber',[UserController::class,'delete'])->name('DeleteMumber');

});

Route::middleware(['auth:sanctum','role:Employee',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('AddWorker',[WorkerController::class,'index'])->name('AddWorker');
    Route::post('storeAddWorker',[WorkerController::class,'store'])->name('storeAddWorker');

    Route::get('ViewWorker',[WorkerController::class,'View'])->name('ViewWorker');
    // Route::post('storeAddWorker',[WorkerController::class,'store'])->name('storeAddWorker');

    Route::get('EditWorker',[WorkerController::class,'edit'])->name('EditWorker');
    Route::post('SaveEditWorker',[WorkerController::class,'update'])->name('SaveEditWorker');
    Route::post('DeleteWorker',[WorkerController::class,'DeleteWorker'])->name('DeleteWorker');
   
    Route::get('/ReceiveContact',[FeedbackController::class,'index'])->name('ReceiveContact');

});

Route::middleware(['auth:sanctum','role:User',config('jetstream.auth_session'),'verified'])->group(function () {

   
});

// Route::group(['middleware'=>['auth','role:author|reviewer']],function ()
// {
//     //upload research
//     Route::get('/research',[ResaerchController::class, 'index'])->name('research');
//     Route::post('research\store',[ResaerchController::class,'store'])->name('research_store');
//     //tranking Research
//     Route::get('trankingResearch',[ResaerchController::class, 'trankingResearch'])->name('trankingResearch');

// });

