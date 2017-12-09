<?php

require_once __DIR__ . '\TileDecorator.php';

class GoldDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 10;
    }
}
