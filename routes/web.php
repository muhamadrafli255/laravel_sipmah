<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublisherController;
use App\Models\BorrowBooks;

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
    return redirect('/login');
});

Route::post('/getcities', [AddressController::class, 'getCities']);
Route::post('/getdistricts', [AddressController::class, 'getDistricts']);
Route::post('/getsubdistricts', [AddressController::class, 'getSubDistricts']);

/*
|--------------------------------------------------------------------------
| Route Middleware Guest
|--------------------------------------------------------------------------
*/
Route::group([
    'namespace'     => 'App',
    'middleware'    => ['guest'],
], function()
{
    Route::prefix('register')->group(function()
    {
        Route::get('/', [AuthController::class, 'register']);
        Route::post('/', [AuthController::class, 'store']);
    });

    Route::prefix('activation')->group(function()
    {
        Route::get('/{token}', [AuthController::class, 'activation']);
        Route::post('/{token}', [AuthController::class, 'activate']);
    });

    Route::prefix('login')->group(function()
    {
        Route::get('/', [AuthController::class, 'index'])->name('login');
        Route::post('/', [AuthController::class, 'authenticate']);
    });

    Route::prefix('forgot-password')->group(function()
    {
        Route::get('/', [AuthController::class, 'forgotPassword']);
        Route::post('/', [AuthController::class, 'mailReset']);
    });

    Route::prefix('reset-password')->group(function()
    {
        Route::get('/{token}', [AuthController::class, 'resetPassword']);
        Route::post('/{token}', [AuthController::class, 'changePassword']);
    });
});



/*
|--------------------------------------------------------------------------
| Route Middleware Auth
|--------------------------------------------------------------------------
*/
Route::group([
    'namespace'     =>  'App',
    'middleware'    =>  ['auth']
], function(){

    Route::get('/logout', [AuthController::class, 'logout']);

});


/*
|--------------------------------------------------------------------------
| Route Middleware Auth Role: Admin
|--------------------------------------------------------------------------
*/
Route::group([
    'namespace'     =>  'app',
    'middleware'    =>  ['auth', 'role:admin'],
], function(){

    Route::prefix('dashboard')->group(function()
    {
        Route::get('/', [DashboardController::class, 'index']);
    });

    Route::prefix('officers')->group(function()
    {
        Route::get('/', [OfficerController::class, 'index']);
        Route::get('/create', [OfficerController::class, 'create']);
        Route::post('/store', [OfficerController::class, 'store']);
        Route::get('/{id}', [OfficerController::class, 'detail']);
        Route::get('/{id}/edit', [OfficerController::class, 'edit']);
        Route::post('/{id}/update', [OfficerController::class, 'update']);
        Route::get('/{id}/delete', [OfficerController::class, 'delete']);
        Route::post('/getuser', [OfficerController::class, 'getUser']);
    });

});

/*
|--------------------------------------------------------------------------
| Route Middleware Auth Role: Admin & Officer
|--------------------------------------------------------------------------
*/
Route::group([
    'namespace' =>  'app',
    'middleware'    =>  ['auth', 'role:officer|admin'],
], function(){

    Route::prefix('members')->group(function()
    {
        Route::get('/', [MemberController::class, 'index']);
        Route::get('/create', [MemberController::class, 'create']);
        Route::post('/store', [MemberController::class, 'store']);
        Route::get('/{id}', [MemberController::class, 'detail']);
        Route::get('/{id}/edit', [MemberController::class, 'edit']);
        Route::post('/{id}/update', [MemberController::class, 'update']);
        Route::get('/{id}/delete', [MemberController::class, 'delete']);
    });

    Route::prefix('categories')->group(function()
    {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/create', [CategoryController::class, 'create']);
        Route::post('/store', [CategoryController::class, 'store']);
        Route::get('/{id}/books', [CategoryController::class, 'detail']);
        Route::get('/{id}/edit', [CategoryController::class, 'edit']);
        Route::post('/{id}/update', [CategoryController::class, 'update']);
        Route::get('/{id}/delete', [CategoryController::class, 'delete']);
    });

    Route::prefix('racks')->group(function()
    {
        Route::get('/', [RackController::class, 'index']);
        Route::get('/create', [RackController::class, 'create']);
        Route::post('/store', [RackController::class, 'store']);
        Route::get('/{id}/categories', [RackController::class, 'detail']);
        Route::get('/{rackId}/categories/{categoryId}/books', [RackController::class, 'rackCategories']);
        Route::get('/{id}/edit', [RackController::class, 'edit']);
        Route::post('/{id}/update', [RackController::class, 'update']);
        Route::get('/{id}/delete', [RackController::class, 'delete']);
    });

    Route::prefix('publishers')->group(function()
    {
        Route::get('/', [PublisherController::class, 'index']);
        Route::get('/{id}/books', [PublisherController::class, 'detail']);
        Route::get('/create', [PublisherController::class, 'create']);
        Route::post('/store', [PublisherController::class, 'store']);
        Route::get('/{id}/edit', [PublisherController::class, 'edit']);
        Route::post('/{id}/update', [PublisherController::class, 'update']);
        Route::get('/{id}/delete', [PublisherController::class, 'delete']);
    });

    Route::prefix('books')->group(function()
    {
        Route::get('/', [BookController::class, 'index']);
        Route::get('/create', [BookController::class, 'create']);
        Route::get('/{id}', [BookController::class, 'detail']);
        Route::post('/store', [BookController::class, 'store']);
        Route::get('/{id}/edit', [BookController::class, 'edit']);
        Route::post('/{id}/update', [BookController::class, 'update']);
        Route::get('/{id}/delete', [BookController::class, 'delete']);
    });

    Route::prefix('borrows')->group(function()
    {
        Route::get('/', [BorrowController::class, 'index']);
        Route::get('/create', [BorrowController::class, 'create']);
        Route::get('/{id}', [BorrowController::class, 'detail']);
        Route::post('/store', [BorrowController::class, 'store']);
        Route::get('/{id}/edit', [BorrowController::class, 'edit']);
        Route::post('/{id}/update', [BorrowController::class, 'update']);
        Route::get('/{id}/return', [BorrowController::class, 'return']);
        Route::post('/{id}/return', [BorrowController::class, 'returned']);
    });

    Route::prefix('reports')->group(function()
    {
        Route::get('/', [ReportController::class, 'index']);
        Route::get('/books', [ReportController::class, 'books']);
        Route::get('/{id}/borrowed', [ReportController::class, 'borrowed']);
        Route::get('/{id}/damaged', [ReportController::class, 'damaged']);
        Route::get('/{id}/lost', [ReportController::class, 'lost']);
    });

    Route::prefix('dashboard')->group(function()
    {
        Route::get('/', [DashboardController::class, 'index']);
    });
});


/*
|--------------------------------------------------------------------------
| Route Middleware Auth Role: Member
|--------------------------------------------------------------------------
*/
Route::group([
    'namespace'     =>  'app',
    'middleware'    =>  ['auth', 'role:member'],
], function(){
    Route::prefix('home')->group(function()
    {
        Route::get('/', [HomeController::class, 'index']);
    });

    Route::prefix('books')->group(function()
    {
        Route::get('/', [BookController::class, 'index']);
        Route::get('/{id}', [BookController::class, 'detail']);
    });

    Route::prefix('borrows')->group(function()
    {
        Route::get('/', [BorrowController::class, 'index']);
        Route::get('/{id}', [BorrowController::class, 'detail']);
    });
});