<?php

namespace Tests\Structural;

use Patterns\Structural\Bridge\Human;
use Patterns\Structural\Bridge\Magician;
use Patterns\Structural\Bridge\Orc;
use Patterns\Structural\Bridge\Priest;
use Patterns\Structural\Bridge\Warrior;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    /**
     * @test
     */
    public function adapts_successfully()
    {
        $orcMagician = new Orc(new Magician);
        $orcWarrior = new Orc(new Warrior);
        $humanWarrior = new Human(new Warrior);
        $humanPriest = new Human(new Priest);

        static::assertEquals("Orc swings a club savagely", $orcWarrior->attack());
        static::assertEquals('Orc throws a lightning savagely', $orcMagician->attack());
        static::assertEquals('Human swings a club in a boring fashion', $humanWarrior->attack());
        static::assertEquals('Human prays in a boring fashion', $humanPriest->attack());
    }
}