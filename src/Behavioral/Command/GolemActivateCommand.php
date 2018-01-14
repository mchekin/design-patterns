<?php

namespace Patterns\Behavioral\Command;

class GolemActivateCommand implements CommandInterface
{
    /**
     * @var Golem
     */
    private $golem;

    /**
     * GolemActivateCommand constructor.
     *
     * @param Golem $golem
     */
    public function __construct(Golem $golem)
    {
        $this->golem = $golem;
    }

    public function execute()
    {
        $this->golem->activate();
    }
}