<?php namespace Products;

require_once __DIR__ . '\Payment.php';

class CODPayment extends Payment
{
    public function process()
    {
        return 'COD payment successfully done';
    }
}
