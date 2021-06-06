<?php

namespace App\Providers;

use App\PaymentGatway\Payment;
use Illuminate\Support\ServiceProvider;

class PaymentServesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //serves provider for paymentgatway and payment
        $this->app->bind('payment', function () {
            return new Payment();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
