<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::post('/testPost', [App\Http\Controllers\testController::class, 'testPost'])->name('testPost');
Route::get('/testget', [App\Http\Controllers\testController::class, 'testget'])->name('testget');
Route::middleware(['auth','role:admin'])->group(function(){    
    // Route::get('/add-user',[App\Http\Controllers\UserController::class, 'create'])->name('add_user');    
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('orders', App\Http\Controllers\OrdersController::class);
    Route::resource('knowledge_base', App\Http\Controllers\KnowledgeBaseController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('report', App\Http\Controllers\ReportController::class);
    Route::resource('users', UserController::class);
    Route::resource('notification', App\Http\Controllers\NotificationController::class);
    Route::resource('terms-conditions', App\Http\Controllers\TermsConditionsController::class);
    Route::get('contacts-list', [App\Http\Controllers\UserController::class, 'index'])->name('ContactList');
    Route::get('globalsearch/{search}', [App\Http\Controllers\GlobalSearchController::class, 'index'])->name('GlobalSearch');
    Route::post('save-slider',[App\Http\Controllers\SliderController::class,'saveSlider']);
    Route::post('/saveFaq', [App\Http\Controllers\FaqController::class, 'saveFaq'])->name('saveFaq');
    Route::put('/updateFaq', [App\Http\Controllers\FaqController::class, 'updateFaq'])->name('updateFaq');
    Route::get('/getFaq', [App\Http\Controllers\FaqController::class, 'getFaq'])->name('getfaq');
    Route::get('/system_pages', [App\Http\Controllers\PageController::class, 'index'])->name('system_pages');
    Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat');
    Route::post('/chat', [App\Http\Controllers\ChatController::class, 'fileMessage'])->name('fileMessage');    
    Route::get('/discount', [App\Http\Controllers\DiscountController::class, 'index'])->name('discountList');    
    Route::get('/discount/create', [App\Http\Controllers\DiscountController::class, 'create'])->name('discountCreate');    
    Route::POST('/discount', [App\Http\Controllers\DiscountController::class, 'store'])->name('discount.store');    
    Route::get('/discount/edit/{discount}', [App\Http\Controllers\DiscountController::class, 'edit'])->name('discount.edit');    
    Route::PUT('/discount/edit/{discount}', [App\Http\Controllers\DiscountController::class, 'update'])->name('discount.update');    
    Route::DELETE('/discount/delete/{discount}', [App\Http\Controllers\DiscountController::class, 'delete'])->name('discount.delete');    
});
//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::view('forgot-password', 'auth.reset_password')->name('password.reset');



Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

