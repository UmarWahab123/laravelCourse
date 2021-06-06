<?php
namespace App\PaymentGatway;

class PaymentFacade
{
    protected static function getFacadeAccessor()
    {
        return 'payment';
    }
}
