<?php namespace Creator;

require_once __DIR__ . '\..\Products\CODPayment.php';
require_once __DIR__ . '\ProcessPayment.php';

class ProcessCODPayment extends ProcessPayment
{
    public function getGrandTotal()
    {
        // Get the total of an order to process
    }

    public function processPayment()
    {
        return new \Products\CODPayment;
    }

    public function processOrder()
    {
    }
}
