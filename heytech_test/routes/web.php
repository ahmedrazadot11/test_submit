<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function() {

    // Route::prefix('companies')->group(function(){
    //     Route::get('index', CompanyController::class, 'index')->name('companies');
    //     Route::get('create', CompanyController::class, 'create')->name('createCompany');
    //     Route::post('store', CompanyController::class, 'store')->name('storeCompany');
    //     Route::get('edit', CompanyController::class, 'edit')->name('editCompany');
    //     Route::put('update', CompanyController::class, 'update')->name('updateCompany');
    //     Route::delete('delete', [CompanyController::class, 'delete'])->name('editCompany');
    // });
    
    Route::resource('/companies', CompanyController::class)->names(['index' => 'companies']);
    Route::resource('/employees', EmployeeController::class)->names(['index' => 'employees']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
