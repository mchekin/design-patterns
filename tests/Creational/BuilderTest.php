<?php

namespace Tests\Creational;

use Patterns\Creational\Builder\CharacterBuilderDirector;
use Patterns\Creational\Builder\DwarfCharacterBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /**
     * @test
     */
    public function buildsDwarfCharacter()
    {
        // Arrange
        $dwarfCharacterBuilder = new DwarfCharacterBuilder();
        $characterBuilder = new CharacterBuilderDirector($dwarfCharacterBuilder);

        // Act
        $character = $characterBuilder->build();

        // Assert
        static::assertEquals(DwarfCharacterBuilder::STRENGTH, $character->getStrength());
        static::assertEquals(DwarfCharacterBuilder::AGILITY, $character->getAgility());
        static::assertEquals(DwarfCharacterBuilder::CONSTITUTION, $character->getConstitution());
        static::assertEquals(DwarfCharacterBuilder::WISDOM, $character->getWisdom());
        static::assertEquals(DwarfCharacterBuilder::INTELLIGENCE, $character->getIntelligence());
        static::assertEquals(DwarfCharacterBuilder::CHARISMA, $character->getCharisma());
    }
}