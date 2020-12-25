<?php

namespace spice\gamelib\event\arena;

use pocketmine\event\Cancellable;
use pocketmine\event\plugin\PluginEvent;
use spice\gamelib\arena\Arena;

class ArenaRegisterEvent extends PluginEvent implements Cancellable
{
    /** @var array|null */
    public static ?array $handlerList = null;
    /** @var Arena */
    private Arena $arena;

    /**
     * ArenaStartGameEvent constructor.
     * @param Arena $arena
     */
    public function __construct(Arena $arena)
    {
        parent::__construct($arena->plugin);
        $this->arena = $arena;
    }

    /**
     * @return Arena
     */
    public function getArena(): Arena
    {
        return $this->arena;
    }

}