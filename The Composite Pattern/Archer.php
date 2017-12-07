<?php

require_once __DIR__ . '/Unit.php';

class Archer extends Unit
{
    public function bombardStrength() : unit
    {
        return 4;
    }
}
