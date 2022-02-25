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

    /**
     * @return float
     */
    public function getLifePoints(): float
    {
        return $this->lifePoints;
    }

    /**
     * @param float $lifePoints
     */
    public function setLifePoints(float $lifePoints): void
    {
        $this->lifePoints = $lifePoints;
    }

    /**
     * @return float
     */
    public function getStrength(): float
    {
        return $this->strength;
    }

    /**
     * @param float $strength
     */
    public function setStrength(float $strength): void
    {
        $this->strength = $strength;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * @param float $speed
     */
    public function setSpeed(float $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Weapon
     */
    public function getEquippedWeapon(): Weapon
    {
        return $this->equippedWeapon;
    }

    /**
     * @param Weapon $equippedWeapon
     */
    public function setEquippedWeapon(Weapon $equippedWeapon): void
    {
        $this->equippedWeapon = $equippedWeapon;
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
