<?php

namespace Manuel\GamePhp\Model;

use Manuel\GamePhp\Dto\UserDTO;

class Character
{
  private float $lifePoints;
  private float $strength;
  private float $speed;
  private string $name;

  private Weapon $equippedWeapon;

  public function __construct(UserDTO $props)
  {
    $this->lifePoints = $props->lifePoints;
    $this->strength = $props->strength;
    $this->speed = $props->speed;
    $this->name = $props->name;
  }

  public function attack(Character $target)
  {
    if (!isset($this->equippedWeapon)) {
      $target->recieveDamage($this->strength * $this->speed);
    } else {
      $target->recieveDamage(($this->strength * $this->speed) * $this->equippedWeapon->getDamage());
    }
  }

  public function recieveDamage(float $damage)
  {
    $this->lifePoints -= $damage;
  }

  public function setEquipedWeapon(Weapon $weapon)
  {
    $this->equippedWeapon = $weapon;
  }

  public function sayMyName()
  {
    printf("My name: %s\n", $this->name);
  }

  public function describe()
  {
    printf("My name: %s\nLife points: %f\n", $this->name, $this->lifePoints);
  }
}
