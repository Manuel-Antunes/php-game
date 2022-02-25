<?php

namespace Manuel\GamePhp\Model;

enum WeaponTypes
{
    case SHORT;
    case LONG;
}

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

    public function __construct($props)
    {
        $this->damage = $props->damage;
        parent::__construct($props);
    }
}
