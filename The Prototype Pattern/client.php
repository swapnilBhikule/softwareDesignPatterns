<?php

require_once __DIR__ . '\CreateEnvironment.php';

require_once __DIR__ . '\Environment\EarthSea.php';
require_once __DIR__ . '\Environment\EarthPlains.php';
require_once __DIR__ . '\Environment\EarthForest.php';

$env = new CreateEnvironment(
    new \Environment\EarthSea,
    new \Environment\EarthPlains,
    new \Environment\EarthForest
);

var_dump($env->createSea());
var_dump($env->createPlains());
var_dump($env->createForest());
