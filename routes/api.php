<?php

use App\Http\Controllers\ConverterController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ExchangeController;
use Illuminate\Support\Facades\Route;

Route::get('/converter/convert', [ConverterController::class, 'convert']);

Route::get('/currency/getAvailableCurrencies', [CurrencyController::class, 'getAvailableCurrencies']);
Route::post('/currency/addAvailableCurrency', [CurrencyController::class, 'addAvailableCurrency']);
Route::delete('/currency/removeAvailableCurrency', [CurrencyController::class, 'removeAvailableCurrency']);

Route::get('/exchange/getExchangeRates', [ExchangeController::class, 'getExchangeRates']);
