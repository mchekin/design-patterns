<?php

namespace Patterns\Behavioral\Strategy;


class ElfStrategy implements ValidationStrategy
{
    public function isValid(Humanoid $humanoid): bool
    {
        return $humanoid->getHeight() > 170 && !$humanoid->isBearded() && $humanoid->isSkinny();
    }
}