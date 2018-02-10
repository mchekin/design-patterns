<?php

namespace Patterns\Behavioral\Strategy;

interface ValidationStrategy
{
    public function isValid(Humanoid $humanoid): bool;
}