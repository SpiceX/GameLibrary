<?php

namespace spice\gamelib\game;

use pocketmine\Player;
use spice\gamelib\component\team\Team;
use spice\gamelib\util\Util;

abstract class Game implements GameStatusIdentifiers
{
    /** @var Player[] */
    public array $players;
    /** @var Player[] */
    public array $spectators;
    /** @var Team[] */
    public array $teams;

    /**
     * @param string $message
     * @param int $id
     * @param string $subMessage
     */
    public function broadcastMessage(string $message, int $id = 0, string $subMessage = "")
    {
        foreach ($this->players as $player) {
            switch ($id) {
                case self::MSG_MESSAGE:
                    $player->sendMessage($message);
                    break;
                case self::MSG_TIP:
                    $player->sendTip($message);
                    break;
                case self::MSG_POPUP:
                    $player->sendPopup($message);
                    break;
                case self::MSG_TITLE:
                    $player->sendTitle($message, $subMessage);
                    break;
            }
        }
    }

    /**
     * @param string $soundName
     */
    public function broadcastSound(string $soundName)
    {
        foreach ($this->players as $player) {
            Util::playSound($player, $soundName);
        }
    }

    public abstract function startGame();
    public abstract function startRestart();
}