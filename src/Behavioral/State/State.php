<?php

namespace Patterns\Behavioral\State;

abstract class State
{
    abstract public function handleRequest();

    /**
     * @return string
     */
    abstract public function __toString();
}