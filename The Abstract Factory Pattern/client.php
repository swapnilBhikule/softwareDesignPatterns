<?php

require_once __DIR__ . '\Creator\ProcessDebitCardPayment.php';

$object = new Creator\ProcessDebitCardPayment;

var_dump($object->processPayment());
var_dump($object->processRewards());
