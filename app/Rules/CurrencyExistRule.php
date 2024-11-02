<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Pavelkhizhenok\Converter\FreeCurrencyApiClient;

class CurrencyExistRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $freeCurrencyApiClient = new FreeCurrencyApiClient(config('api.freeCurrency.apikey'));
        $currencies = $freeCurrencyApiClient->getCurrencies();

        if (empty($currencies)) {
            $fail('Не удалось получить список валют.');
        }

        if (!isset($currencies[$value])) {
            $fail('Валюты ' . $value . ' нет в списке валют.');
        }
    }
}
