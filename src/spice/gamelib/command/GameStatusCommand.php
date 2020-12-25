<?php

namespace spice\gamelib\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\permission\Permission;
use pocketmine\plugin\Plugin;
use spice\gamelib\Minigame;

class GameStatusCommand extends Command implements PluginIdentifiableCommand
{
    /** @var Minigame */
    private Minigame $plugin;

    /**
     * GameStatusCommand constructor.
     * @param Minigame $plugin
     */
    public function __construct(Minigame $plugin)
    {
        parent::__construct("gmstatus", "game status command", "/gmstatus help", ["gmstatus"]);
        $this->plugin = $plugin;
        $this->setPermission(Permission::DEFAULT_OP);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        // TODO: Implement execute() method.
    }

    /**
     * @return Plugin
     */
    public function getPlugin(): Plugin
    {
        return $this->plugin;
    }
}