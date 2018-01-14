<?php

namespace Tests\Behavior;

use Patterns\Behavioral\Command\Golem;
use Patterns\Behavioral\Command\GolemActivateCommand;
use Patterns\Behavioral\Command\GolemActivateMultipleCommand;
use Patterns\Behavioral\Command\GolemDeactivateCommand;
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
        $activateGolem = new GolemActivateCommand($golem);

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
        $activateGolem = new GolemActivateCommand($golem);
        $deactivateGolem = new GolemDeactivateCommand($golem);

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
        $deactivateAllGolemsCommand = new GolemActivateMultipleCommand($golems);

        // creating the invoker
        $golemRemoteController = new GolemRemoteController;

        // executing the invoker with different commands
        $golemRemoteController->execute($deactivateAllGolemsCommand);

        /** @var Golem $golem */
        foreach ($golems as $golem) {
            static::assertTrue($golem->isActive());
        }
    }
}