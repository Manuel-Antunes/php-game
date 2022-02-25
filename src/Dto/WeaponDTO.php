<?php

namespace Manuel\GamePhp\Dto;

use Manuel\GamePhp\Data\WeaponTypes;

class WeaponDTO extends ItemDTO
{
    public WeaponTypes $type;
    public float $damage;
}