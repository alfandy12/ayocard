<?php

use App\Http\Controllers\TransactionController;
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

Route::get('/', [TransactionController::class, 'index']);
Route::post('/account/add', [TransactionController::class, 'store'])->name('account.add');
Route::post('/transaction/add', [TransactionController::class, 'transaction_store'])->name('transaction.add');
Route::post('/transaction/report', [TransactionController::class, 'transaction_report'])->name('transaction.report');
