<?php

namespace spice\gamelib\event\player;

use pocketmine\event\Cancellable;
use pocketmine\event\plugin\PluginEvent;
use pocketmine\Player;
use spice\gamelib\Minigame;

class PlayerGameWinEvent extends PluginEvent implements Cancellable
{
    /** @var array|null */
    public static ?array $handlerList = null;
    /** @var Player[] */
    public array $players;

    /**
     * PlayerGameWinEvent constructor.
     * @param Player[] $players
     */
    public function __construct(array $players)
    {
        parent::__construct(Minigame::getInstance());
        $this->players = $players;
    }

    /**
     * @return array
     */
    public function getPlayers(): array
    {
        return $this->players;
    }
}