<?php

require_once __DIR__ . '\Tile.php';

class Plains extends Tile
{
    public function getWealthFactor()
    {
        return 2;
    }
}
