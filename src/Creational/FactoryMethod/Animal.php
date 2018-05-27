<?php

namespace Patterns\Creational\FactoryMethod;


interface Animal
{
    /**
     * @return string
     */
    public function getSound(): string;
}