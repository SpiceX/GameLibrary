<?php


namespace spice\gamelib\util;


use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\Player;

class Util
{

    /**
     * @param Player $player
     * @param string $soundName
     */
    public static function playSound(Player $player, string $soundName) {
        $pk = new PlaySoundPacket();
        $pk->soundName = $soundName;
        $pk->pitch = 1;
        $pk->volume = 1;
        $pk->x = $player->getX();
        $pk->y = $player->getY();
        $pk->z = $player->getZ();
        $player->dataPacket($pk);
    }
}