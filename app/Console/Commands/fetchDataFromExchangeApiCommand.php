<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class fetchDataFromExchangeApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-exchange';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch exchange rate data from API (Latvijas banka)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://www.bank.lv/vk/ecb.xml');
        $xml = simplexml_load_string($response->body());
        $json = json_encode($xml);
        $array = json_decode($json, true);

//        foreach ($xml->Currencies->Currency as $currency) {
//            Cache::put(
//                (string)$currency->ID,
//                (float)$currency->Rate
//            );
//        }

        Cache::put('exchange_rates', $array);
    }
}
