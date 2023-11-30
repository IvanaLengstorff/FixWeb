<?php

use App\Http\Controllers\Auth\RegisterMechanicalController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkPositionController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('preRegister', [HomeController::class, 'preRegister'])->name('preRegister');
Route::get('register-mechanical', [RegisterMechanicalController::class, 'showMechanicalRegistrationForm'])->name('register.mechanical.form');
Route::post('register-mechanical', [RegisterMechanicalController::class, 'register'])->name('register.mechanical.create');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);

    Route::group(['prefix' => 'client'], function () {
        Route::get('requests', [RequestController::class, 'client'])->name('requests.client');
        Route::get('vehicles', [VehicleController::class, 'index'])->name('vehicles.client');
        Route::get('completed-requests', [EmployeeController::class, 'index'])->name('client.completed_requests');

    });

    Route::group(['prefix' => 'mechanical'], function () {
        Route::get('requests', [RequestController::class, 'mechanical'])->name('requests.mechanical');
        Route::get('employees', [EmployeeController::class, 'index'])->name('employees.index');
        Route::get('services', [EmployeeController::class, 'index'])->name('services.mechanical');
        Route::get('completed-requests', [EmployeeController::class, 'index'])->name('mechanical.completed_requests');
    });
});
