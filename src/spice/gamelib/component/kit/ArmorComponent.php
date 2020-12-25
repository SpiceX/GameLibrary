<?php

namespace spice\gamelib\component\kit;

use pocketmine\item\Armor;
use pocketmine\item\Item;
use pocketmine\Player;

class ArmorComponent
{
    /** @var Armor|Item */
    private $helmet;
    /** @var Armor|Item */
    private $chestplate;
    /** @var Armor|Item */
    private $leggings;
    /** @var Armor|Item */
    private $boots;

    /**
     * ArmorComponent constructor.
     * @param Item[] $components
     */
    public function __construct(array $components)
    {
        $this->initComponents($components);
    }

    /**
     * @param Item[] $components
     */
    private function initComponents(array $components)
    {
        foreach ($components as $item) {
            if (!$item instanceof Armor) {
                continue;
            }
            switch ($item->getId()) {
                case Item::LEATHER_HELMET:
                case Item::CHAIN_HELMET:
                case Item::IRON_HELMET:
                case Item::GOLD_HELMET:
                case Item::DIAMOND_HELMET:
                case 750: // netherite helmet
                    $this->helmet = $item;
                    break;
                case Item::LEATHER_CHESTPLATE:
                case Item::CHAIN_CHESTPLATE:
                case Item::IRON_CHESTPLATE:
                case Item::GOLD_CHESTPLATE:
                case Item::DIAMOND_CHESTPLATE:
                case 748: // netherite chestplate
                    $this->chestplate = $item;
                    break;
                case Item::LEATHER_LEGGINGS:
                case Item::CHAIN_LEGGINGS:
                case Item::IRON_LEGGINGS:
                case Item::GOLD_LEGGINGS:
                case Item::DIAMOND_LEGGINGS:
                case 749: // netherite leggings
                    $this->leggings = $item;
                    break;
                case Item::LEATHER_BOOTS:
                case Item::CHAIN_BOOTS:
                case Item::IRON_BOOTS:
                case Item::GOLD_BOOTS:
                case Item::DIAMOND_BOOTS:
                case 751: // netherite boots
                    $this->boots = $item;
                    break;
            }
        }
    }

    /**
     * @param Player $player
     */
    public function apply(Player $player)
    {
        $armorInventory = $player->getArmorInventory();
        is_null($this->helmet) ?: $armorInventory->setHelmet($this->helmet);
        is_null($this->chestplate) ?: $armorInventory->setChestplate($this->chestplate);
        is_null($this->leggings) ?: $armorInventory->setLeggings($this->leggings);
        is_null($this->boots) ?: $armorInventory->setBoots($this->boots);
    }

    /**
     * @return Armor|Item
     */
    public function getHelmet()
    {
        return $this->helmet;
    }

    /**
     * @return Armor|Item
     */
    public function getChestplate()
    {
        return $this->chestplate;
    }

    /**
     * @return Armor|Item
     */
    public function getLeggings()
    {
        return $this->leggings;
    }

    /**
     * @return Armor|Item
     */
    public function getBoots()
    {
        return $this->boots;
    }
}