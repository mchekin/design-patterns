<?php

namespace Tests\Creational;

use Patterns\Creational\Builder\CharacterBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /**
     * @test
     */
    public function buildsCharacter()
    {
        // Arrange
        $strength = 18;
        $agility = 15;
        $constitution = 10;
        $wisdom = 14;
        $intelligence = 9;
        $charisma = 16;

        // Act
        $characterBuilder = new CharacterBuilder();
        $characterBuilder
            ->setAttribute('strength', $strength)
            ->setAttribute('agility', $agility)
            ->setAttribute('constitution', $constitution)
            ->setAttribute('wisdom', $wisdom)
            ->setAttribute('intelligence', $intelligence)
            ->setAttribute('charisma', $charisma)
        ;

        $character = $characterBuilder->build();

        // Assert
        static::assertEquals($strength, $character->getStrength());
        static::assertEquals($agility, $character->getAgility());
        static::assertEquals($constitution, $character->getConstitution());
        static::assertEquals($wisdom, $character->getWisdom());
        static::assertEquals($intelligence, $character->getIntelligence());
        static::assertEquals($charisma, $character->getCharisma());
    }
    /**
     * @test
     */
    public function buildsCharacterWithNullAttributes()
    {
        // Arrange

        // Act
        $characterBuilder = new CharacterBuilder();
        $character = $characterBuilder->build();

        // Assert
        static::assertNull($character->getStrength());
        static::assertNull($character->getAgility());
        static::assertNull($character->getConstitution());
        static::assertNull($character->getWisdom());
        static::assertNull($character->getIntelligence());
        static::assertNull($character->getCharisma());
    }
}