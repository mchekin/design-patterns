<?php

namespace Patterns\Structural\Bridge;

class Warrior extends Profession
{

    public function useAbility()
    {
        return "swings a club";
    }
}