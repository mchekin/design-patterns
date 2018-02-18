<?php

namespace Patterns\Behavioral\Template;


abstract class DressingTemplate
{
    /**
     * @var Character
     */
    private $character;

    public function __construct(Character $character)
    {

        $this->character = $character;
    }

    /**
     * @return Character
     */
    public final function dressUp(): Character
    {
        $this->putOnHeaddress()
            ->putOnUpperBodyGarment()
            ->putOnUnderwear()
            ->putOnLowerBodyGarment()
            ->putOnSocks()
            ->putOnFootwear()
            ->putOnExtraGarments()
        ;

        return $this->character;
    }

    /**
     * @return DressingTemplate
     */
    abstract protected function putOnHeaddress(): DressingTemplate;

    /**
     * @return DressingTemplate
     */
    abstract protected function putOnUpperBodyGarment(): DressingTemplate;

    /**
     * @return DressingTemplate
     */
    abstract protected function putOnLowerBodyGarment(): DressingTemplate;

    /**
     * @return DressingTemplate
     */
    abstract protected function putOnFootwear(): DressingTemplate;

    /**
     * @return DressingTemplate
     */
    protected function putOnUnderwear() : DressingTemplate
    {
        $this->character->setUnderwear("simple underwear");

        return $this;
    }

    /**
     * @return DressingTemplate
     */
    protected function putOnSocks() : DressingTemplate
    {
        $this->character->setSocks("simple socks");

        return $this;
    }

    /**
     * @return DressingTemplate
     */
    protected function putOnExtraGarments() : DressingTemplate
    {
        return $this;
    }

    /**
     * @return Character
     */
    protected function getCharacter(): Character
    {
        return $this->character;
    }
}