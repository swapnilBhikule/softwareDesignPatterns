<?php

require_once __DIR__ . '/Archer.php';
require_once __DIR__ . '/LaserCanon.php';
require_once __DIR__ . '/Army.php';

$archer = new Archer;
var_dump($archer->bombardStrength());

$laserCanon = new LaserCanon;
var_dump($laserCanon->bombardStrength());

$army = new Army;

if ($army->composite()) {
    $army->addUnit(new Archer);
    $army->addUnit(new LaserCanon);
}

var_dump($army->bombardStrength());

if ($army->composite()) {
    $army->removeUnit(new Archer);
}

var_dump($army->bombardStrength());
