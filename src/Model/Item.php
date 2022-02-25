<?php

namespace Manuel\GamePhp\Model;

class Item
{
  private string $name;
  private float $value;
  public function __construct($props)
  {
    $this->name = $props->name;
    $this->value = $props->value;
  }
}
