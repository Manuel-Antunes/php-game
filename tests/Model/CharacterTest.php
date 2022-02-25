<?php

namespace Model;

use Manuel\GamePhp\Dto\UserDTO;
use Manuel\GamePhp\Model\Character;
use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
    public function testAttack(){
        $jorge = new Character(new UserDTO(['name' => 'Jorge', 'lifePoints' => 100, 'strength' => 100, 'speed' => 100]));
        $claudio = new Character(new UserDTO(['name' => 'Claudio', 'lifePoints' => 100, 'strength' => 100, 'speed' => 100]));
        $jorge->attack($claudio);
        $this->assertEquals(-9900.000000, $claudio->getLifePoints());
    }
}
