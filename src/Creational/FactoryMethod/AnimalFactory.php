<?php
namespace Patterns\Creational\FactoryMethod;


interface AnimalFactory
{
    /**
     * @param string $species
     *
     * @return Animal
     */
    public function create(string $species): Animal;
}