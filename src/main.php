<?php

use Manuel\GamePhp\Data\WeaponTypes;
use Manuel\GamePhp\Dto\UserDTO;
use Manuel\GamePhp\Dto\WeaponDTO;
use Manuel\GamePhp\Model\Character;
use Manuel\GamePhp\Model\Weapon;

$jorge = new Character(new UserDTO(['name' => 'Jorge', 'lifePoints' => 100, 'strength' => 100, 'speed' => 100]));
$claudio = new Character(new UserDTO(['name' => 'Claudio', 'lifePoints' => 100, 'strength' => 100, 'speed' => 100]));
$twoHandedSword = new Weapon(new WeaponDTO(['type' => WeaponTypes::SHORT, 'damage' => 10, 'name' => 'espada de duas maos', 'value' => 10]));

$jorge->describe();
$jorge->setEquipedWeapon($twoHandedSword);
$jorge->attack($claudio);
$claudio->describe();
