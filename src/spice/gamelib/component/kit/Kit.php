<?php

namespace spice\gamelib\component\kit;

use pocketmine\entity\EffectInstance;
use pocketmine\item\Item;
use pocketmine\Player;

abstract class Kit
{
    /** @var Item[] */
    private array $items = [];
    /** @var Item[] */
    private array $armor;
    /** @var EffectInstance[] */
    private array $effects = [];
    /** @var ArmorComponent */
    private ArmorComponent $armorComponent;
    /** @var string */
    private string $name;

    /**
     * Kit constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return Item[]
     */
    public function getArmor(): array
    {
        return $this->armor;
    }

    /**
     * @param Item[] $armor
     */
    public function setArmor(array $armor): void
    {
        $this->armor = $armor;
    }

    /**
     * @return EffectInstance[]
     */
    public function getEffects(): array
    {
        return $this->effects;
    }

    /**
     * @param EffectInstance[] $effects
     */
    public function setEffects(array $effects): void
    {
        $this->effects = $effects;
    }

    /**
     * @return ArmorComponent
     */
    public function getArmorComponent(): ArmorComponent
    {
        return $this->armorComponent;
    }

    /**
     * @param ArmorComponent $armorComponent
     */
    public function setArmorComponent(ArmorComponent $armorComponent): void
    {
        $this->armorComponent = $armorComponent;
    }

    /** @param Player $player */
    abstract public function apply(Player $player);

}