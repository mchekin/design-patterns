<?php

namespace Patterns\Behavioral\Strategy;


class DwarfStrategy implements ValidationStrategy
{
    public function isValid(Humanoid $humanoid): bool
    {
        return $humanoid->getHeight() < 150
        && $humanoid->isBearded()
        && !$humanoid->isSkinny()
        && in_array($humanoid->getSkinColor(), ['red', 'yellow']);
    }
}