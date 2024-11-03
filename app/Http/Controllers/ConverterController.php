<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConverterConvertRequest;
use App\Models\AvailableCurrency;
use App\Models\ExchangeRate;
use Pavelkhizhenok\Converter\Converter;
use Pavelkhizhenok\Converter\FreeCurrencyApiClient;

class ConverterController extends Controller
{
    public function convert(ConverterConvertRequest $request) {
        $validatedData = $request->validated();

        $converter = new Converter(ExchangeRate::getExchangeRates());
        $convertedAmout = $converter->convert($validatedData['amount'], $validatedData['from'], $validatedData['to']);

        if ($convertedAmout) {
            return response()->json($convertedAmout);
        }

        return response()->json('Для выбранной валюты пока нет добаленных курсов валют', 503);
    }
}
