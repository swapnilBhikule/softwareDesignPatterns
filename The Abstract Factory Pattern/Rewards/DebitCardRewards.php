<?php namespace Rewards;

require_once __DIR__ . '/Rewards.php';

class DebitCardRewards extends Rewards
{
    private $reward = 15;

    public function giveReward()
    {
        return $this->reward;
    }
}
