<?php

namespace Patterns\Creational\FactoryMethod;


use InvalidArgumentException;
use Patterns\Creational\AbstractFactory\AbstractAnimalFactory;
use RuntimeException;

class AsianAnimalFactory extends AbstractAnimalFactory
{
    /**
     * @param string $species
     *
     * @throws RuntimeException
     *
     * @return Animal
     */
    public function create(string $species): Animal
    {
        switch ($species) {
            case Species::ELEPHANT:
                return new AsianElephant();
            case Species::RHINO:
                return new AsianRhino();
        }

        throw new InvalidArgumentException("There is no such animal species in Asia");
    }
}