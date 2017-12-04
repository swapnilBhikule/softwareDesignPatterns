<?php namespace Payments;

require_once __DIR__ . '\Payment.php';

class DebitCardPayment extends Payment
{
    public function process()
    {
        return 'Debit card payment successfully done';
    }
}
