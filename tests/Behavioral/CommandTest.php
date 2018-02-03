<?php

namespace Tests\Behavioral;

use Patterns\Behavioral\Command\Golem;
use Patterns\Behavioral\Command\ActivateGolemCommand;
use Patterns\Behavioral\Command\ActivateMultipleGolemsCommand;
use Patterns\Behavioral\Command\DeactivateGolemCommand;
use Patterns\Behavioral\Command\GolemRemoteController;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    /**
     * @test
     */
    public function activates_one_golem()
    {
        // creating the receiver
        $golem = new Golem;

        // creating the command objects
        $activateGolem = new ActivateGolemCommand($golem);

        // creating the invoker
        $golemRemoteController = new GolemRemoteController;

        // executing the invoker with different commands
        $golemRemoteController->execute($activateGolem);

        static::assertTrue($golem->isActive());
    }

    /**
     * @test
     */
    public function activates_and_deactivates_one_golem()
    {
        // creating the receiver
        $golem = new Golem;

        // creating the command objects
        $activateGolem = new ActivateGolemCommand($golem);
        $deactivateGolem = new DeactivateGolemCommand($golem);

        // creating the invoker
        $golemRemoteController = new GolemRemoteController;

        // executing the invoker with different commands
        $golemRemoteController->execute($activateGolem)->execute($deactivateGolem);

        static::assertFalse($golem->isActive());
    }

    /**
     * @test
     */
    public function activates_all_golems()
    {
        // creating the receivers
        $golem1 = new Golem;
        $golem2 = new Golem;
        $golem3 = new Golem;
        $golems = [$golem1, $golem2, $golem3];

        // creating the command objects
        $activateGolem1Command = new ActivateGolemCommand($golem1);
        $deactivateGolem1Command = new DeactivateGolemCommand($golem1);
        $deactivateGolem2Command = new DeactivateGolemCommand($golem2);
        $activateAllGolemsCommand = new ActivateMultipleGolemsCommand($golems);

        // creating the invoker
        $golemRemoteController = new GolemRemoteController;

        // executing the invoker with different commands
        $golemRemoteController
            ->execute($activateGolem1Command)
            ->execute($deactivateGolem1Command)
            ->execute($deactivateGolem2Command)
            ->execute($activateAllGolemsCommand);

        /** @var Golem $golem */
        foreach ($golems as $golem) {
            static::assertTrue($golem->isActive());
        }
    }
}