<?php

namespace Patterns\Structural\Bridge;

class Priest extends Profession
{
    public function useAbility()
    {
        return "prays";
    }
}