<?php

namespace Patterns\Creational\Builder;


class Attributes
{
    private $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttribute(string $name)
    {
        return $this->attributes[$name] ?? null;
    }

    public function setAttribute(string $name, $value): Attributes
    {
        $this->attributes[$name] = $value;

        return $this;
    }

}