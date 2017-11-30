<?php

namespace Patterns\Structural\Bridge;

class Magician extends Profession
{
    public function useAbility()
    {
        return "throws a lightning";
    }
}