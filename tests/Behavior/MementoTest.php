<?php

namespace Tests\Behavior;

use Patterns\Behavioral\Memento\Person;
use Patterns\Behavioral\Memento\PersonCaretaker;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    /**
     * @test
     */
    public function saves_and_reverts_back_every_change()
    {
        // original values
        $originalFirstName = "Jim";
        $originalLastName = "Morris";

        // creating person
        $person = new Person($originalFirstName, $originalLastName);

        // new values
        $newFirstName = "Bruce";
        $newLastName = "Lee";

        // creating the caretaker object and passing it the person object
        $caretaker = new PersonCaretaker($person);

        // saving the person with the original values
        $caretaker->save();

        static::assertEquals($originalFirstName, $person->getFirstName());
        static::assertEquals($originalLastName, $person->getLastName());

        // changing the first name and saving
        $person->setFirstName($newFirstName);
        $caretaker->save();

        static::assertEquals($newFirstName, $person->getFirstName());
        static::assertEquals($originalLastName, $person->getLastName());

        // changing the last name without saving
        $person->setLastName($newLastName);

        static::assertEquals($newFirstName, $person->getFirstName());
        static::assertEquals($newLastName, $person->getLastName());

        // reverting the second change - back to original last name
        $caretaker->revert();

        static::assertEquals($newFirstName, $person->getFirstName());
        static::assertEquals($originalLastName, $person->getLastName());

        // reverting the first change - back to the original first name
        $caretaker->revert();

        static::assertEquals($originalFirstName, $person->getFirstName());
        static::assertEquals($originalLastName, $person->getLastName());
    }
}