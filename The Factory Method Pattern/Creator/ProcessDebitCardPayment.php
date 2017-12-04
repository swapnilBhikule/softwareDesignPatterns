<?php namespace Creator;

require_once __DIR__ . '\..\Products\DebitCardPayment.php';
require_once __DIR__ . '\ProcessPayment.php';

class ProcessDebitCardPayment extends ProcessPayment
{
    public function getGrandTotal()
    {
        // Get the total of an order to process
    }

    public function processPayment()
    {
        return new \Products\DebitCardPayment;
    }

    public function processOrder()
    {
    }
}
