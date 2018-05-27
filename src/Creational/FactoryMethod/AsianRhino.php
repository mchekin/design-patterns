<?php

namespace Patterns\Creational\FactoryMethod;


class AsianRhino implements Animal
{
    /**
     * @return string
     */
    public function getSound(): string
    {
        return "Eeeeeh (in Asian)";
    }
}