<?php

namespace spice\gamelib\util;

class Vector3 extends \pocketmine\math\Vector3
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return "$this->x,$this->y,$this->z";
    }

    /**
     * @param string $string
     * @return Vector3
     */
    public static function fromString(string $string): Vector3
    {
        return new Vector3((int)explode(",", $string)[0], (int)explode(",", $string)[1], (int)explode(",", $string)[2]);
    }
}