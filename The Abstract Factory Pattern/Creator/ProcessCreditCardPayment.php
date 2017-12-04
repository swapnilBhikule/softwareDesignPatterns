<?php namespace Creator;

require_once __DIR__ . '\ProcessPayment.php';
require_once __DIR__ . '\..\Rewards\CreditCardRewards.php';
require_once __DIR__ . '\..\Payments\CreditCardPayment.php';

class ProcessCreditCardPayment extends ProcessPayment
{
    public function getGrandTotal()
    {
        // Get the total of an order to process
    }

    public function processPayment()
    {
        return new \Payments\CreditCardPayment;
    }

    public function processRewards()
    {
        return new \Rewards\CreditCardRewards;
    }

    public function processOrder()
    {
    }
}
