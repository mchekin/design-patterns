<?php

namespace Patterns\Creational\Builder;

interface CharacterBuilderInterface
{
    /**
     * @return Character
     */
    public function build(): Character;

    /**
     * @return CharacterBuilderInterface
     */
    public function setStrength(): CharacterBuilderInterface;

    /**
     * @return CharacterBuilderInterface
     */
    public function setAgility(): CharacterBuilderInterface;

    /**
     * @return CharacterBuilderInterface
     */
    public function setConstitution(): CharacterBuilderInterface;

    /**
     * @return CharacterBuilderInterface
     */
    public function setWisdom(): CharacterBuilderInterface;

    /**
     * @return CharacterBuilderInterface
     */
    public function setIntelligence(): CharacterBuilderInterface;

    /**
     * @return CharacterBuilderInterface
     */
    public function setCharisma(): CharacterBuilderInterface;

    /**
     * @return Attributes
     */
    public function getAttributes(): Attributes;
}