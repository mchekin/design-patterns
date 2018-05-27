<?php

namespace Tests\Behavioral;

use Patterns\Behavioral\Strategy\DwarfStrategy;
use Patterns\Behavioral\Strategy\Humanoid;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /**
     * @test
     */
    public function dwarf_validation_passes_with_fitting_params()
    {
        $creature = new Humanoid(new DwarfStrategy());

        $creature->setBearded(true)
            ->setSkinny(false)
            ->setHeight(145)
            ->setSkinColor('red')
        ;

        self::assertTrue($creature->isValid());
    }

    /**
     * @test
     */
    public function elf_validation_fails_on_having_beard()
    {
        $creature = new Humanoid(new DwarfStrategy());

        $creature->setBearded(true)
            ->setSkinny(true)
            ->setHeight(180)
            ->setSkinColor('red')
        ;

        self::assertFalse($creature->isValid());
    }

    /**
     * @test
     */
    public function orc_validation_passes_on_green_skin()
    {
        $creature = new Humanoid(new DwarfStrategy());

        $creature->setBearded(true)
            ->setSkinny(true)
            ->setHeight(180)
            ->setSkinColor('green')
        ;

        self::assertFalse($creature->isValid());
    }
}