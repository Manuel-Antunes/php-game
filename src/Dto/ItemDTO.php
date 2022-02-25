<?php

namespace Manuel\GamePhp\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class ItemDTO extends DataTransferObject
{
    public string $name;
    public float $value;
}