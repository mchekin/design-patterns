<?php

namespace Patterns\Structural\Adapter;


class RussianPersonAdapter implements InternationalPersonInterface
{
    /**
     * @var RussianPerson
     */
    private $russianPerson;

    /**
     * RussianPersonAdapter constructor.
     * @param RussianPerson $russianPerson
     */
    public function __construct(RussianPerson $russianPerson)
    {

        $this->russianPerson = $russianPerson;
    }

    /**
     * @return string
     */
    public function getFirstname():string
    {
        return $this->russianPerson->getImya();
    }

    /**
     * @return string
     */
    public function getLastname():string
    {
        return $this->russianPerson->getFamiliya();
    }
}