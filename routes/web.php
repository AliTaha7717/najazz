<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController\BillController;
use App\Http\Controllers\WebController\CounterController;
use App\Http\Controllers\WebController\OfferController;
use App\Http\Controllers\WebController\OrderController;
use App\Http\Controllers\WebController\UserController;
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

//Route::get('/', function () {
 //   return view('welcome');
//});
Route::middleware('auth')->group(function () {
    Route::resource('user', UserController::class);
    Route::get('show_user/{id}', [UserController::class, 'show_user'])->name('user.show_user');
    Route::get('edit_cardid/{id}', [UserController::class, 'edit_cardid'])->name('user.edit_cardid');
    Route::get('edit_license/{id}', [UserController::class, 'edit_license'])->name('user.edit_license');
    Route::get('edit_verified/{id}', [UserController::class, 'edit_verified'])->name('user.edit_verified');
    Route::get('show_offer/{id}', [UserController::class, 'show_offer'])->name('user.show_offer');
    Route::get('driver', [UserController::class, 'index_driver'])->name('driver');
    Route::get('dealer', [UserController::class, 'index_dealer'])->name('dealer');
    Route::resource('order', OrderController::class);
});

/////////////////////// OFFER ROUT ///////////////////////
Route::get('offer',[OfferController::class,'index'])->name('offer');
Route::get('offer/wating',[OfferController::class,'waiting_offer'])->name('offer.waiting');
Route::get('offer/done',[OfferController::class,'done_offer'])->name('offer.done');
Route::get('offer/order',[OfferController::class,'offer_order'])->name('offer.order');////
Route::get('offer/show/{id}',[OfferController::class,'show'])->name('offer.show');
Route::get('offer/deletenot',[OfferController::class,'deletenot'])->name('offer.deletenot');

/////////////////////// ORDER ROUT ///////////////////////
Route::get('order2/waiting',[OrderController::class,'wating_order'])->name('order.waiting');
Route::get('order2/deletenot',[OrderController::class,'deletenot'])->name('order.deletenot');
Route::get('order2/done',[OrderController::class,'done_order'])->name('order.done');
Route::get('order2/show_offer/{id}',[OrderController::class,'show_offer'])->name('order.show_offer');//////

Route::get('/',[CounterController::class,'counter'])->middleware(['auth'])->name('dashboard');
//Route::get('/dashboard2',[CounterController::class,'counter'])->middleware(['auth' ])->name('dashboard2');
Route::get('/nat',[CounterController::class,'natifiaction'])->name('nat');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('show/{id}', [BillController::class, 'show'])->name('bill.show');
Route::get('edit/{id}', [BillController::class, 'edit'])->name('bill.edit');
Route::post('/bill_update', [BillController::class, 'update'])->name('bill.update');
