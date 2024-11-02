<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddAvailableCurrencyRequest;
use App\Http\Requests\RemoveAvailableCurrencyRequest;
use App\Models\AvailableCurrency;

class CurrencyController extends Controller
{
    public function getAvailableCurrencies() {
        return response(AvailableCurrency::getAvailableCurrencies());
    }

    public function addAvailableCurrency(AddAvailableCurrencyRequest $request) {
        $validatedData = $request->validated();

        if (AvailableCurrency::addAvailableCurrency($validatedData['code'])) {
            return response('Курс был успешно добавлен.');
        }

        return response('Ошибка добавления курса.', 500);
    }

    public function removeAvailableCurrency(RemoveAvailableCurrencyRequest $request) {
        $validatedData = $request->validated();

        if (AvailableCurrency::removeAvailableCurrency($validatedData['code'])) {
            return response('Курс был успешно удален.');
        }

        return response('Ошибка удаления курса.', 500);
    }
}
