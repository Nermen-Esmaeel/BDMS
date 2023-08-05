<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DonerController;
use App\Http\Controllers\Backend\DonationController;

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
    return view('welcome');
});



Route::group(['prefix' => 'dashboard' , 'middleware' => ['auth' , 'IsAdmin']] , function(){
    Route::get('/', function(){
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('doner', DonerController::class);
    Route::get('donation/approve/{id}' ,[DonationController::class  , 'approve'])->name('donation.approve');
    Route::get('donation/reject/{id}' ,[DonationController::class  , 'reject'])->name('donation.reject');
    Route::resource('donation', DonationController::class);




});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
