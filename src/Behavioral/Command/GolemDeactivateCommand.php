<?php

namespace Patterns\Behavioral\Command;

class GolemDeactivateCommand implements CommandInterface
{
    /**
     * @var Golem
     */
    private $golem;

    /**
     * GolemDeactivateCommand constructor.
     *
     * @param Golem $golem
     */
    public function __construct(Golem $golem)
    {
        $this->golem = $golem;
    }

    public function execute()
    {
        $this->golem->deactivate();
    }
}