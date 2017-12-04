<?php namespace Rewards;

require_once __DIR__ . '/Rewards.php';

class CreditCardRewards extends Rewards
{
    private $reward = 20;

    public function giveReward()
    {
        return $this->reward;
    }
}
