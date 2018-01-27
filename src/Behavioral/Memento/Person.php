<?php

namespace Patterns\Behavioral\Memento;

class Person
{
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $lastName;

    /**
     * Person constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return PersonMemento
     */
    public function save()
    {
        return new PersonMemento($this->firstName, $this->lastName);
    }

    /**
     * @param PersonMemento $personMemento
     * @return $this
     */
    public function revert(PersonMemento $personMemento)
    {
        $this->firstName = $personMemento->getFirstName();
        $this->lastName = $personMemento->getLastName();

        return $this;
    }

    /**
     * @param string $firstName
     * @return Person
     */
    public function setFirstName(string $firstName): Person
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param string $lastName
     * @return Person
     */
    public function setLastName(string $lastName): Person
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}