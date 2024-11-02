<?php

namespace App\Console\Commands;

use App\Models\AvailableCurrency;
use App\Models\ExchangeRate;
use Illuminate\Console\Command;
use Pavelkhizhenok\Converter\FreeCurrencyApiClient;

class UpdateExchangeRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-exchange-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $freeCurrencyApiClient = new FreeCurrencyApiClient(config('api.freeCurrency.apikey'));

        $exchangeRates = $freeCurrencyApiClient->getExchangeRates(AvailableCurrency::getAvailableCurrencies());

        ExchangeRate::setExchangeRates($exchangeRates);

        echo "Курсы валют были успешно заполнены.\n";
    }
}
