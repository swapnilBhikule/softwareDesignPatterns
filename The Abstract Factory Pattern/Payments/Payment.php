<?php namespace Payments;

abstract class Payment
{
    abstract public function process();
}
