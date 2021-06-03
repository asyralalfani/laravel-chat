<?php

use App\Events\WebSocketEvent;
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

Route::get('/', function () {
    broadcast(new WebSocketEvent('my data'));
    return view('welcome');
});

Auth::routes();

Route::get('/chats', [App\Http\Controllers\ChatController::class, 'index'])->name('chats')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
