<?php

namespace Patterns\Behavioral\State;


abstract class Context
{
    abstract public function setState(State $state);
}