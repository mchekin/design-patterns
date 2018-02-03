<?php

namespace Tests\Behavioral;

use Patterns\Behavioral\Command\Golem;
use Patterns\Behavioral\Command\ActivateMultipleGolemsCommand2;
use Patterns\Behavioral\Mediator\GolemMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    /**
     * @test
     */
    public function activates_all_golems_through_mediator()
    {
        $mediator = new GolemMediator;

        // creating the receivers
        $golem1 = new Golem;
        $golem2 = new Golem;
        $golem3 = new Golem;
        $golems = [$golem1, $golem2, $golem3];

        // registering the receivers with the mediator
        $mediator->register($golem1);
        $mediator->register($golem2);
        $mediator->register($golem3);

        // passing the mediator to the command object
        $command = new ActivateMultipleGolemsCommand2($mediator);

        // executing the command
        $command->execute();

        /** @var Golem $golem */
        foreach ($golems as $golem) {
            static::assertTrue($golem->isActive());
        }
    }
}