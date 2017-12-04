<?php namespace Creator;

require_once __DIR__ . '\ProcessPayment.php';
require_once __DIR__ . '\..\Rewards\DebitCardRewards.php';
require_once __DIR__ . '\..\Payments\DebitCardPayment.php';

class ProcessDebitCardPayment extends ProcessPayment
{
    public function getGrandTotal()
    {
        // Get the total of an order to process
    }

    public function processPayment()
    {
        return new \Payments\DebitCardPayment;
    }

    public function processRewards()
    {
        return new \Rewards\DebitCardRewards;
    }

    public function processOrder()
    {
    }
}
