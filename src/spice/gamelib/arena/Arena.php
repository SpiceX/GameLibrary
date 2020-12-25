<?php

namespace spice\gamelib\arena;

use pocketmine\event\Listener;
use spice\gamelib\event\arena\ArenaStartGameEvent;
use spice\gamelib\game\Game;
use spice\gamelib\game\GameSettings;
use spice\gamelib\Minigame;

class Arena extends Game implements Listener
{

    /** @var GameSettings */
    private GameSettings $settings;
    /** @var Minigame */
    public Minigame $plugin;
    /** @var bool */
    public bool $setup;

    /**
     * Arena constructor.
     * @param Minigame $plugin
     * @param GameSettings $settings
     */
    public function __construct(Minigame $plugin, GameSettings $settings)
    {
        $this->settings = $settings;
        $this->plugin = $plugin;
    }

    public function startGame()
    {
        $ev = new ArenaStartGameEvent($this);
        if (!$ev->isCancelled()) {
            $ev->call();
        }
    }

    public function startRestart()
    {
        // TODO: Implement startRestart() method.
    }

    /**
     * @return GameSettings
     */
    public function getSettings(): GameSettings
    {
        return $this->settings;
    }
}