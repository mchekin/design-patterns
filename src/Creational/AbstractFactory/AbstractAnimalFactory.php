<?php

namespace Patterns\Creational\AbstractFactory;


use InvalidArgumentException;
use Patterns\Creational\FactoryMethod\AfricanAnimalFactory;
use Patterns\Creational\FactoryMethod\Animal;
use Patterns\Creational\FactoryMethod\AsianAnimalFactory;

abstract class AbstractAnimalFactory
{
    /**
     * @param string $continent
     *
     * @return AbstractAnimalFactory
     */
    public static function getAnimalFactory(string $continent)
    {

        switch ($continent) {
            case Continent::ASIA:
                return new AsianAnimalFactory();
            case Continent::AFRICA:
                return new AfricanAnimalFactory();
        }

        throw new InvalidArgumentException("The continent is not supported");
    }

    /**
     * @param string $Continent
     *
     * @return Animal
     */
   abstract public function create(string $Continent): Animal;
}