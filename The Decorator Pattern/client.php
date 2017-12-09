<?php

require_once __DIR__ . '\Plains.php';
require_once __DIR__ . '\GoldDecorator.php';
require_once __DIR__ . '\ForestDecorator.php';

$tile = new GoldDecorator(new Plains);

var_dump($tile->getWealthFactor());

$tile = new GoldDecorator(new ForestDecorator(new Plains));

var_dump($tile->getWealthFactor());
