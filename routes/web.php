<?php

use App\Http\Controllers\FontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FontendController::class, 'home'])->name('home');
Route::get('/about', [FontendController::class, 'about'])->name('about');
Route::get('/admin', [FontendController::class, 'admin'])->name('admin');





require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    // Services controller
    // Route::get('/admin', [ServicesController::class, 'index'])->name('services');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');


    // // Dashboard
    // Route::prefix('admin')->group(function () {
    //     // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    //     // Dashboard controller
    //     // Route::get('/admin', function () {
    //     //     return view('dashboard');
    //     // })->name('admin');

    //     // Route::get('/password', [PasswordController::class, 'create'])->name('password.reset');
    //     // Route::post('/password', [PasswordController::class, 'store']);

    //     // Route::view('/member', 'memberAdd')->name('member.add');

    //     // // resource route
    //     // Route::resources([

    //     //     'product' => ProductController::class,
    //     //     'purchase' => PurchaseController::class,
    //     // ]);

    //     // // Product route

    //     // Route::get('/product-trash', [ProductController::class, 'trash'])->name('product.trash');
    //     // Route::post('/product-trash', [ProductController::class, 'restoreOrDelete'])->name('product.trash');
    //     // Route::get('/product-restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
    //     // Route::get('/product-permanentDelete/{id}', [ProductController::class, 'permanentDelete'])->name('product.permanentDelete');
    // });
});