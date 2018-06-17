<?php

namespace Patterns\Creational\FactoryMethod;


class AfricanRhino implements Animal
{
    /**
     * @return string
     */
    public function getSound(): string
    {
        return "Eeeeeh (African)";
    }
}