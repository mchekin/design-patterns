<?php

namespace Patterns\Creational\FactoryMethod;


class AfricanElephant implements Animal
{
    /**
     * @return string
     */
    public function getSound(): string
    {
        return "Pauuuuh (in African)";
    }
}