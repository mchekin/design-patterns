<?php

namespace Patterns\Behavioral\Strategy;


class OrcStrategy implements ValidationStrategy
{
    public function isValid(Humanoid $humanoid): bool
    {
        return $humanoid->getSkinColor() === 'green';
    }
}