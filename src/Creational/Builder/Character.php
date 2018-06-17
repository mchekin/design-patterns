<?php

namespace Patterns\Creational\Builder;


class Character
{
    private $attributes;

    public function __construct(CharacterBuilderInterface $builder)
    {
        $this->attributes = $builder->getAttributes();
    }

    public function getStrength()
    {
        return $this->attributes->getAttribute('strength');
    }

    public function getAgility()
    {
        return $this->attributes->getAttribute('agility');
    }

    public function getConstitution()
    {
        return $this->attributes->getAttribute('constitution');
    }

    public function getWisdom()
    {
        return $this->attributes->getAttribute('wisdom');
    }

    public function getIntelligence()
    {
        return $this->attributes->getAttribute('intelligence');
    }

    public function getCharisma()
    {
        return $this->attributes->getAttribute('charisma');
    }
}