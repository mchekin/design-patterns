<?php

namespace Tests\Creational;

use InvalidArgumentException;
use Patterns\Creational\AbstractFactory\AbstractAnimalFactory;
use Patterns\Creational\AbstractFactory\Continent;
use Patterns\Creational\FactoryMethod\Animal;
use Patterns\Creational\FactoryMethod\Species;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function createsAfricanAnimals()
    {
        // Act
        $africanAnimalFactory = AbstractAnimalFactory::getAnimalFactory(Continent::AFRICA);

        $elephant = $africanAnimalFactory->create(Species::ELEPHANT);
        $rhino = $africanAnimalFactory->create(Species::RHINO);
        $hippo = $africanAnimalFactory->create(Species::HIPPO);

        // Assert
        static::assertEquals("Pauuuuh (African)", $elephant->getSound());
        static::assertEquals("Eeeeeh (African)", $rhino->getSound());
        static::assertEquals("Hrrr hrrrrr hrrrr (African)", $hippo->getSound());
    }

    /**
     * @test
     */
    public function createsAsianAnimals()
    {
        // Act
        $asianAnimalFactory = AbstractAnimalFactory::getAnimalFactory(Continent::ASIA);

        $elephant = $asianAnimalFactory->create(Species::ELEPHANT);
        $rhino = $asianAnimalFactory->create(Species::RHINO);

        // Assert
        static::assertEquals("Pauuuuh (Asian)", $elephant->getSound());
        static::assertEquals("Eeeeeh (Asian)", $rhino->getSound());
    }

    /**
     * @test
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage The continent is not supported
     */
    public function throwsExceptionOnTryingToRetrieveNonExistentAnimalFactory()
    {
        // Act
        AbstractAnimalFactory::getAnimalFactory(Continent::EUROPE);
    }
}