<?php

namespace Patterns\Behavioral\Command;

class ActivateMultipleGolemsCommand implements CommandInterface
{
    /**
     * @var Golem[]
     */
    private $golems = [];

    /**
     * GolemActivateCommand constructor.
     *
     * @param array $golems
     */
    public function __construct(array $golems)
    {
        $this->golems = $golems;
    }

    public function execute()
    {
        foreach ($this->golems as $golem) {
            $golem->activate();
        }
    }
}