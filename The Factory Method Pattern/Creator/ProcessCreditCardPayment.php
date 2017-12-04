<?php namespace Creator;

require_once __DIR__ . '\..\Products\CreditCardPayment.php';
require_once __DIR__ . '\ProcessPayment.php';

class ProcessCreditCardPayment extends ProcessPayment
{
    public function getGrandTotal()
    {
        // Get the total of an order to process
    }

    public function processPayment()
    {
        return new \Products\CreditCardPayment;
    }

    public function processOrder()
    {
    }
}
