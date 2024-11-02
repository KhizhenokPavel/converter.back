<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableCurrency extends Model
{
    use HasFactory;

    protected $fillable = ['currency_code', 'currency_name'];

    public static function getAvailableCurrencies(): array
    {
        return static::pluck('currency_code')->toArray();
    }

    public static function addAvailableCurrency(string $code): bool {
        $result = static::create([
            'currency_code' => $code,
        ]);

        return $result->wasRecentlyCreated;
    }

    public static function removeAvailableCurrency(string $code): bool {
        $result = static::where('currency_code', $code)->delete();

        return $result;
    }
}
