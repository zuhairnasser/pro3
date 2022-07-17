<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\RepositoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PDFController;
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

Route::get('/', function () {
    return view('auth.login');
});

// Route::resource('category', CategoryController::class);
// Route::resource('hospital', HospitalController::class);
// Route::resource('section', SectionController::class);
// Route::resource('product', ProductController::class);
// Route::resource('manufacture', ManufactureController::class);
// Route::resource('repository', RepositoryController::class);
// Route::resource('client', ClientController::class);
// Route::resource('store', StoreController::class);
// Route::get('oprations', [App\Http\Controllers\OprtaionsController::class, 'index']);
// Route::post('export', [App\Http\Controllers\OprtaionsController::class, 'export'])->name('export');
// Route::get('get-export', [App\Http\Controllers\OprtaionsController::class, 'exportCreate']);
// Route::get('get-import', [App\Http\Controllers\OprtaionsController::class, 'importCreate']);
// Route::post('import', [App\Http\Controllers\OprtaionsController::class, 'import'])->name('import');
// Route::get('/products', [App\Http\Controllers\ReportsController::class, 'getAllProducts']);
// Route::get('/oprations-report', [App\Http\Controllers\ReportsController::class, 'getAllOprations']);
// Auth::routes();
// Route::group([
//     'prefix' => 'accounts',
//     'middleware' => 'permission:super-admin'
// ], function () {
//     Route::get('/', [App\Http\Controllers\AccountController::class, 'index']);
//     Route::get('create', [App\Http\Controllers\AccountController::class, 'create']);
//     Route::get('{id}/edit', [App\Http\Controllers\AccountController::class, 'edit']);
//     Route::get('{id}/delete', [App\Http\Controllers\AccountController::class, 'destroy']);
//     Route::post('store', [App\Http\Controllers\AccountController::class, 'store']);
//     Route::post('{id}/update', [App\Http\Controllers\AccountController::class, 'update']);
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('create-pdf-file', [PDFController::class, 'index']);
