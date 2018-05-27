<?php

namespace Patterns\Creational\FactoryMethod;


class Hippo implements Animal
{
    /**
     * @return string
     */
    public function getSound(): string
    {
        return "Hrrr hrrrrr hrrrr (in African)";
    }
}