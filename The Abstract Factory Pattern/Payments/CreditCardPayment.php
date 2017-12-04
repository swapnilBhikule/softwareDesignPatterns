<?php namespace Payments;

require_once __DIR__ . '\Payment.php';

class CreditCardPayment extends Payment
{
    public function process()
    {
        return 'Credit card payment successfully done';
    }
}
