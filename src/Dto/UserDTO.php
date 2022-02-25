<?php

namespace Manuel\GamePhp\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class UserDTO extends DataTransferObject
{
    public float $lifePoints;
    public float $strength;
    public float $speed;
    public string $name;
}