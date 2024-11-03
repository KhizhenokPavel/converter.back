<?php

namespace App\Rules;

use App\Models\ExchangeRate;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExchangeRateExist implements ValidationRule
{
    protected array $data = [];

    public function __construct(array $data) {
        $this->setData($data);
    }

    public function setData(array $data) {
        $this->data = $data;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!ExchangeRate::getExchangeRate($this->data['from'],  $this->data['to'])) {
            $fail('Курса ' . $value . ' нет в списке валют.');
        }
    }
}
