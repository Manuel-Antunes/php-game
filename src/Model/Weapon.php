<?php

namespace Manuel\GamePhp\Model;

use Manuel\GamePhp\Data\WeaponTypes;
use Manuel\GamePhp\Dto\WeaponDTO;

class Weapon extends Item
{
    private WeaponTypes $type;
    private float $damage;
    public function __construct(WeaponDTO $props)
    {
        parent::__construct($props);
        $this->damage = $props->damage;
        $this->type = $props->type;
    }

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
}
