<?php

namespace Tests\Behavioral;

use Patterns\Behavioral\Template\Character;
use Patterns\Behavioral\Template\MageDressingTemplate;
use Patterns\Behavioral\Template\WarriorDressingTemplate;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{
    /**
     * @test
     */
    public function puts_on_the_warrior_attire()
    {
        $character = new Character;

        $dressingTemplate = new WarriorDressingTemplate($character);
        $character = $dressingTemplate->dressUp();

        static::assertEquals("spiked helmet", $character->getHeaddress());
        static::assertEquals("chain mail", $character->getUpperBodyGarment());
        static::assertEquals("armored pants", $character->getLowerBodyGarment());
        static::assertEquals("armored boots", $character->getFootwear());
        static::assertEquals("simple socks", $character->getSocks());
        static::assertEquals("simple underwear", $character->getUnderwear());
        static::assertEquals([
            "armored gloves",
            "armored mustache protector"
        ], $character->getExtraGarments());
    }
    /**
     * @test
     */
    public function puts_on_the_mage_attire()
    {
        $character = new Character;

        $dressingTemplate = new MageDressingTemplate($character);
        $character = $dressingTemplate->dressUp();

        static::assertEquals("conical hat", $character->getHeaddress());
        static::assertEquals("long black robe", $character->getUpperBodyGarment());
        static::assertEquals("", $character->getLowerBodyGarment());
        static::assertEquals("soft sleepers", $character->getFootwear());
        static::assertEquals("fancy red socks", $character->getSocks());
        static::assertEquals("simple underwear", $character->getUnderwear());
        static::assertEquals([
            'long black cape',
        ], $character->getExtraGarments());
    }
}