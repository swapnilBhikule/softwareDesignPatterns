<?php namespace Rewards;

require_once __DIR__ . '/Rewards.php';

class CODRewards extends Rewards
{
    private $reward = 10;

    public function giveReward()
    {
        return $this->reward;
    }
}
