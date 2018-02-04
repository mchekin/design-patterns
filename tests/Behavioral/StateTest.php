<?php

namespace Tests\Behavioral;

use Patterns\Behavioral\State\Dragon;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    /**
     * @test
     */
    public function dragon_cycles_through_his_different_states()
    {
        $dragon = new Dragon();
        self::assertEquals("eating", $dragon->getState());

        $dragon->doTheNextThing();
        self::assertEquals("sleeping", $dragon->getState());

        $dragon->doTheNextThing();
        self::assertEquals("flying", $dragon->getState());

        $dragon->doTheNextThing();
        self::assertEquals("eating", $dragon->getState());
    }
}