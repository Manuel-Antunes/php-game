<?php

namespace Manuel\GamePhp\Model;

use Manuel\GamePhp\Data\WeaponTypes;
use Manuel\GamePhp\Dto\WeaponDTO;

class Weapon extends Item
{
    private WeaponTypes $type;
    private float $damage;

    /**
     * @return float
     */
    public function getDamage(): float
    {
        return $this->damage;
    }

    /**
     * @param float $damage
     */
    public function setDamage(float $damage): void
    {
        $this->damage = $damage;
    }

    public function __construct(WeaponDTO $props)
    {
        $this->damage = $props->damage;
        parent::__construct($props);
    }
}
