<?php

namespace Patterns\Creational\FactoryMethod;

use InvalidArgumentException;
use Patterns\Creational\AbstractFactory\AbstractAnimalFactory;
use RuntimeException;

class AfricanAnimalFactory extends AbstractAnimalFactory
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
                return new AfricanElephant();
            case Species::RHINO:
                return new AfricanRhino();
            case Species::HIPPO:
                return new Hippo();
        }

        throw new InvalidArgumentException("There is no such animal species in Africa");
    }
}