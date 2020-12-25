<?php

namespace spice\gamelib;

use pocketmine\plugin\PluginBase;

abstract class Minigame extends PluginBase
{
    abstract public static function getInstance(): Minigame;
}