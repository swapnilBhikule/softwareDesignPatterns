<?php

require_once __DIR__ . '\TileDecorator.php';

class ForestDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 4;
    }
}
