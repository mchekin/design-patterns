<?php

namespace Patterns\Structural\Bridge;

class Orc extends Race
{
    public function attack()
    {
        return "Orc " . $this->profession->useAbility() . " savagely";
    }
}