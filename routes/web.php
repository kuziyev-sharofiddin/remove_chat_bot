<?php

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

Route::get('setwebhook', function () {
    $repsonse = \Telegram\Bot\Laravel\Facades\Telegram::setWebhook(['url'=> 'https://d2e8-188-113-233-5.ngrok-free.app/api/telegram/webhook']);
});
