<?php

namespace Patterns\Creational\Builder;

class CharacterBuilder
{
    private $attributes;

    public function __construct(Attributes $attributes = null)
    {
        $this->attributes = $attributes ?? new Attributes();
    }

    /**
     * @return Character
     */
    public function build(): Character
    {
        return new Character($this);
    }

    /**
     * @param string $name
     * @param string $value
     *
     * @return CharacterBuilder
     */
    public function setAttribute(string $name, int $value): CharacterBuilder
    {
        $this->attributes->setAttribute($name, $value);

        return $this;
    }

    /**
     * @return Attributes
     */
    public function getAttributes(): Attributes
    {
        return $this->attributes;
    }
}