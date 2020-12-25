<?php

namespace spice\gamelib\game;

use ArrayAccess;
use Countable;
use spice\gamelib\arena\Arena;

class GameSettings implements ArrayAccess, Countable
{

    /**
     * Probable formato de juego
     * need_reset: true
     * teaming: true
     */

    /** @var Arena */
    private Arena $arena;
    /** @var array */
    private array $settings = [];

    /**
     * GameSettings constructor.
     * @param Arena $arena
     */
    public function __construct(Arena $arena)
    {
        $this->arena = $arena;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->settings[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->settings[$offset] ?? null;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->settings[] = $value;
        } else {
            $this->settings[$offset] = $value;
        }
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        if (isset($this->settings[$offset])) {
            unset($this->settings[$offset]);
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->settings);
    }

    /**
     * @return Arena
     */
    public function getArena(): Arena
    {
        return $this->arena;
    }
}