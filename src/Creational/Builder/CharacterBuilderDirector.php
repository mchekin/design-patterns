<?php
/**
 * Date: 6/17/2018
 * Time: 1:04 PM
 */

namespace Patterns\Creational\Builder;


class CharacterBuilderDirector
{
    /**
     * @var CharacterBuilderInterface
     */
    private $builder;

    public function __construct(CharacterBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return Character
     */
    public function build()
    {
        return $this->builder
            ->setStrength()
            ->setAgility()
            ->setConstitution()
            ->setWisdom()
            ->setIntelligence()
            ->setCharisma()
            ->build();
    }
}