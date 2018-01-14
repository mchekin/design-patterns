<?php

namespace Patterns\Behavioral\Command;

/**
 * The Invoker
 */
class GolemRemoteController
{
    /**
     * @param CommandInterface $command
     * @return GolemRemoteController
     */
    public function execute(CommandInterface $command) : GolemRemoteController
    {
        $command->execute();

        return $this;
    }
}