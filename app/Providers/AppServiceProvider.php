<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Peru\Http\ContextClient;
use Peru\Jne\{Dni, DniParser};
use Peru\Sunat\UserValidator;
use Peru\Sunat\{HtmlParser, Ruc, RucParser};
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

        $this->app->singleton('Peru\Jne\Dni', function () {
            return new Dni(new ContextClient(), new DniParser());
        });

        $this->app->singleton('Peru\Sunat\UserValidator', function () {
            return new UserValidator(new ContextClient());
        });

        $this->app->singleton('Peru\Sunat\Ruc', function () {
            return new Ruc(new ContextClient(), new RucParser(new HtmlParser()));
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
