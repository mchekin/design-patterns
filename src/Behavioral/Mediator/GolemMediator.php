<?php

namespace Patterns\Behavioral\Mediator;

use Patterns\Behavioral\Command\Golem;

class GolemMediator
{
    /**
     * @var array
     */
    private $golems = [];

    /**
     * @param Golem $golem
     */
    public function register(Golem $golem)
    {
        $this->golems[] = $golem;
    }

    public function activateAll()
    {
        foreach ($this->golems as $golem) {
            $golem->activate();
        }
    }
}