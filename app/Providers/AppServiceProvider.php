<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('GuzzleHttp\Client', function () {
            return new Client([
                'base_uri' => 'https://api.jys.pe/ubigeos/nested.json'
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);
        \Braintree_Configuration::environment(env('BRAINTREE_ENV'));
        \Braintree_Configuration::merchantId(env('BRAINTREE_MERCHANT_ID'));
        \Braintree_Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
        \Braintree_Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));
    }
}
