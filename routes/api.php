<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TradeRequestController;

Route::get('/tradeRequests/requestOverview', [TradeRequestController::class, 'index']);
Route::post('/tradeRequests', [TradeRequestController::class, 'store']);
