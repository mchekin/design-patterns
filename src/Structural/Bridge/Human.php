<?php

namespace Patterns\Structural\Bridge;

class Human extends Race
{
    public function attack()
    {
        return "Human " . $this->profession->useAbility() . " in a boring fashion";
    }
}