<?php

namespace Patterns\Creational\FactoryMethod;


class AsianElephant implements Animal
{
    /**
     * @return string
     */
    public function getSound(): string
    {
        return "Pauuuuh (in Asian)";
    }
}