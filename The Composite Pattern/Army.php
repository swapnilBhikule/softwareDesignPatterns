<?php

require_once __DIR__ . '/Unit.php';

class Army extends Unit
{
    private $units = [];

    public function composite()
    {
        return $this;
    }

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units)) {
            return;
        }

        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $index = array_search($unit, $this->units);

        if (is_int($index)) {
            unset($this->units[$index]);
        }
    }

    public function bombardStrength() : int
    {
        $strength = 0;
        foreach ($this->units as $unit) {
            $strength += $unit->bombardStrength();
        }

        return $strength;
    }
}
