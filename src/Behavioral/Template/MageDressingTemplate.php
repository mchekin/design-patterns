<?php

namespace Patterns\Behavioral\Template;


class MageDressingTemplate extends DressingTemplate
{
    /**
     * @return DressingTemplate
     */
    protected function putOnHeaddress(): DressingTemplate
    {
        $this->getCharacter()->setHeaddress("conical hat");
        return $this;
    }

    /**
     * @return DressingTemplate
     */
    protected function putOnUpperBodyGarment(): DressingTemplate
    {
        $this->getCharacter()->setUpperBodyGarment("long black robe");
        return $this;
    }

    /**
     * @return DressingTemplate
     */
    protected function putOnLowerBodyGarment(): DressingTemplate
    {
        return $this;
    }

    /**
     * @return DressingTemplate
     */
    protected function putOnFootwear(): DressingTemplate
    {
        $this->getCharacter()->setFootwear("soft sleepers");
        return $this;
    }

    protected function putOnExtraGarments(): DressingTemplate
    {
        $this->getCharacter()->setExtraGarments([
            "long black cape",
        ]);

        return $this;
    }

    protected function putOnSocks(): DressingTemplate
    {
        $this->getCharacter()->setSocks("fancy red socks");
        return $this;
    }
}