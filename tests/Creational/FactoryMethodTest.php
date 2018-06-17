<?php

namespace Tests\Creational;

use InvalidArgumentException;
use Patterns\Creational\FactoryMethod\AfricanAnimalFactory;
use Patterns\Creational\FactoryMethod\AsianAnimalFactory;
use Patterns\Creational\FactoryMethod\Species;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * @var AsianAnimalFactory
     */
    private $asianAnimalFactory;

    /**
     * @var AfricanAnimalFactory
     */
    private $africanAnimalFactory;

    public function setUp()
    {
        parent::setUp();

        $this->asianAnimalFactory = new AsianAnimalFactory();
        $this->africanAnimalFactory = new AfricanAnimalFactory();
    }

    /**
     * @test
     */
    public function createsAfricanAnimals()
    {
        // Act
        $elephant = $this->africanAnimalFactory->create(Species::ELEPHANT);
        $rhino = $this->africanAnimalFactory->create(Species::RHINO);
        $hippo = $this->africanAnimalFactory->create(Species::HIPPO);

        // Assert
        static::assertEquals("Pauuuuh (African)", $elephant->getSound());
        static::assertEquals("Eeeeeh (African)", $rhino->getSound());
        static::assertEquals("Hrrr hrrrrr hrrrr (African)", $hippo->getSound());
    }

    /**
     * @test
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage There is no such animal species in Asia
     */
    public function throws_exception_on_trying_to_create_non_existing_asian_animal()
    {
        // Act
        $this->asianAnimalFactory->create(Species::HIPPO);
    }
}