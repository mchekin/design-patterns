<?php

namespace Patterns\Behavioral\Memento;

class PersonCaretaker
{
    /**
     * @var array
     */
    private $personHistory = [];

    /**
     * @var Person
     */
    private $person;

    /**
     * PersonCaretaker constructor.
     * @param Person $person
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @return PersonCaretaker
     */
    public function save(): PersonCaretaker
    {
        $newMemento = $this->person->save();

        array_push($this->personHistory, $newMemento);

        return $this;
    }

    /**
     * @return PersonCaretaker
     */
    public function revert(): PersonCaretaker
    {
        if (!empty($this->personHistory)) {
            $lastMemento = array_pop($this->personHistory);

            $this->person->revert($lastMemento);
        }

        return $this;
    }
}