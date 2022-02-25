<?php

use Manuel\GamePhp\Core\Game;
use Manuel\GamePhp\Dto\UserDTO;
use Manuel\GamePhp\Model\Character;
use Spatie\DataTransferObject\DataTransferObject;


$jorge = new Character(new UserDTO(['name' => 'Jorge', 'lifePoints' => 100, 'strength' => 100, 'speed' => 100]));
$claudio = new Character(new UserDTO(['name' => 'Claudio', 'lifePoints' => 100, 'strength' => 100, 'speed' => 100]));
$jorge->describe();
$jorge->attack($claudio);
$claudio->describe();
