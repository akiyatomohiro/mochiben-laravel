<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/hello', function () {
    return 'Hello Next.js';
});

Route::get('/healthcheck', function () {
    return response('Healthy', 200);
});

Route::get('/memos', [MemoController::class, 'fetch']);

Route::post('/memos', [MemoController::class, 'create']);
