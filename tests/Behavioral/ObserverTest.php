<?php

namespace Tests\Behavioral;

use Patterns\Behavioral\Observer\CommunicationChannel;
use Patterns\Behavioral\Observer\Person;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    /**
     * @test
     */
    public function only_people_who_are_connected_to_the_channel_see_messages()
    {
        // creating the communication channel
        $communicationChannel = new CommunicationChannel;

        // Jack joins
        $jack = new Person($communicationChannel, 'Jack');
        $jack->say("Good morning everyone!");

        // Jill joins
        $jill = new Person($communicationChannel, 'Jill');
        $jill->say("Hello! So what programming languages are you interested in?");

        // Jack logs out
        $jack->say("Sorry must log out. See you later!")->logout();

        $jill->say("Hey, wait!");

        // Jacob joins
        $jacob = new Person($communicationChannel, 'Jacob');

        // asserting that the first message is seen by Jack, but not Jill
        $firstMessage = $jack->getName() . ": Good morning everyone!";
        self::assertContains($firstMessage, $jack->getMessageFeed());
        self::assertNotContains($firstMessage, $jill->getMessageFeed());

        // asserting that the second message is seen by both Jack and Jill
        $secondMessage = $jill->getName() . ": Hello! So what programming languages are you interested in?";
        self::assertContains($secondMessage, $jack->getMessageFeed());
        self::assertContains($secondMessage, $jill->getMessageFeed());

        // asserting that the last message is seen by Jill, but not Jack
        $lastMessage = $jill->getName() . ": Hey, wait!";
        self::assertNotContains($lastMessage, $jack->getMessageFeed());
        self::assertContains($lastMessage, $jill->getMessageFeed());

        // asserting that Jacob sees no messages
        self::assertEmpty($jacob->getMessageFeed());
    }
}