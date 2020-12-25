<?php

namespace spice\gamelib\component\team;

use pocketmine\Player;

abstract class Team
{
    /** @var Player[] */
    public array $players = [];

    /**
     * @return Player[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    abstract public function isAlive(): bool;
}