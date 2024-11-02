<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRate;

class ExchangeController extends Controller
{
    public function getExchangeRates() {
        $exchangeRates = ExchangeRate::getExchangeRates();
        
        return response($exchangeRates);
    }
}
