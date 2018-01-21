<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Mediator\GolemMediator;

class ActivateMultipleGolemsCommand2 implements CommandInterface
{
    /**
     * @var GolemMediator
     */
    private $mediator;

    /**
     * GolemActivateCommand constructor.
     *
     * @param GolemMediator $mediator
     */
    public function __construct(GolemMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function execute()
    {
        $this->mediator->activateAll();
    }
}