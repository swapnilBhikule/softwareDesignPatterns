<?php namespace Creator;

abstract class ProcessPayment
{
    abstract public function getGrandTotal();

    abstract public function processPayment();

    abstract public function processOrder();
}
