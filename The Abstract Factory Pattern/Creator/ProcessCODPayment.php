<?php namespace Creator;

require_once __DIR__ . '\ProcessPayment.php';
require_once __DIR__ . '\..\Rewards\CODRewards.php';
require_once __DIR__ . '\..\Payments\CODPayment.php';

class ProcessCODPayment extends ProcessPayment
{
    public function getGrandTotal()
    {
    }

    public function processPayment()
    {
        return new \Payments\CODPayment;
    }

    public function processRewards()
    {
        return new \Rewards\CODRewards;
    }

    public function processOrder()
    {
    }
}
