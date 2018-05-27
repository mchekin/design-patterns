<?php

namespace Patterns\Creational\FactoryMethod;


use RuntimeException;

class AsianAnimalFactory implements AnimalFactory
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

        throw new RuntimeException("There is no such animal species in Asia");
    }
}