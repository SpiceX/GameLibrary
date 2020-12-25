<?php

namespace spice\gamelib\game;

use pocketmine\scheduler\Task;
use spice\gamelib\arena\Arena;

abstract class GameScheduler extends Task
{
    /** @var Arena */
    private Arena $arena;

    /**
     * ArenaScheduler constructor.
     * @param Arena $arena
     */
    public function __construct(Arena $arena)
    {
        $this->arena = $arena;
    }

    /**
     * @return Arena
     */
    public function getArena(): Arena
    {
        return $this->arena;
    }

    abstract public function onRun(int $currentTick);

}