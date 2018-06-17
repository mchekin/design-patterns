<?php

namespace Patterns\Creational\Builder;

class DwarfCharacterBuilder implements CharacterBuilderInterface
{
    private $attributes;

    const STRENGTH = 15;
    const AGILITY = 10;
    const CONSTITUTION = 20;
    const WISDOM = 18;
    const INTELLIGENCE = 12;
    const CHARISMA = 9;

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
     *
     * @return CharacterBuilderInterface
     */
    public function setStrength(): CharacterBuilderInterface
    {
        $this->attributes->setAttribute('strength', self::STRENGTH);

        return $this;
    }

    /**
     *
     * @return CharacterBuilderInterface
     */
    public function setAgility(): CharacterBuilderInterface
    {
        $this->attributes->setAttribute('agility', self::AGILITY);

        return $this;
    }

    /**
     *
     * @return CharacterBuilderInterface
     */
    public function setConstitution(): CharacterBuilderInterface
    {
        $this->attributes->setAttribute('constitution', self::CONSTITUTION);

        return $this;
    }

    /**
     *
     * @return CharacterBuilderInterface
     */
    public function setWisdom(): CharacterBuilderInterface
    {
        $this->attributes->setAttribute('wisdom', self::WISDOM);

        return $this;
    }

    /**
     *
     * @return CharacterBuilderInterface
     */
    public function setIntelligence(): CharacterBuilderInterface
    {
        $this->attributes->setAttribute('intelligence', self::INTELLIGENCE);

        return $this;
    }

    /**
     *
     * @return CharacterBuilderInterface
     */
    public function setCharisma(): CharacterBuilderInterface
    {
        $this->attributes->setAttribute('charisma', self::CHARISMA);

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