<?php

namespace Patterns\Behavioral\Template;


class WarriorDressingTemplate extends DressingTemplate
{
    /**
     * @return DressingTemplate
     */
    protected function putOnHeaddress(): DressingTemplate
    {
        $this->getCharacter()->setHeaddress("spiked helmet");
        return $this;
    }

    /**
     * @return DressingTemplate
     */
    protected function putOnUpperBodyGarment(): DressingTemplate
    {
        $this->getCharacter()->setUpperBodyGarment("chain mail");
        return $this;
    }

    /**
     * @return DressingTemplate
     */
    protected function putOnLowerBodyGarment(): DressingTemplate
    {
        $this->getCharacter()->setLowerBodyGarment("armored pants");
        return $this;
    }

    /**
     * @return DressingTemplate
     */
    protected function putOnFootwear(): DressingTemplate
    {
        $this->getCharacter()->setFootwear("armored boots");
        return $this;
    }

    protected function putOnExtraGarments(): DressingTemplate
    {
        $this->getCharacter()->setExtraGarments([
           "armored gloves",
           "armored mustache protector"
        ]);

        return $this;
    }
}