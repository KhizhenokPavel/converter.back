<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use HasFactory;

    protected $fillable = ['from_currency_code', 'to_currency_code', 'rate'];

    public static function setExchangeRates(array $exchangeRates): void
    {
        static::truncate();

        foreach ($exchangeRates as $fromCurrency => $fromCurrencyRates) {
            foreach ($fromCurrencyRates as $toCurrency => $pairRate) {
                ExchangeRate::create([
                    'from_currency_code' => $fromCurrency,
                    'to_currency_code' => $toCurrency,
                    'rate' => $pairRate,
                ]);
            }
        }
    }

    public static function getExchangeRates(): array {
        $formattedRates = [];

        foreach (static::all() as $rate) {
            $formattedRates[$rate->from_currency_code][$rate->to_currency_code] = $rate->rate;
        }

        return $formattedRates;
    }
}
