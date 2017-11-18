<?php

namespace Patterns\Structural\Adapter;


class GermanPersonAdapter implements InternationalPersonInterface
{
    /**
     * @var GermanPerson
     */
    private $germanPerson;

    public function __construct(GermanPerson $germanPerson)
    {
        $this->germanPerson = $germanPerson;
    }

    /**
     * @return string
     */
    public function getFirstname():string
    {
        return $this->germanPerson->getVorname();
    }

    /**
     * @return string
     */
    public function getLastname():string
    {
        return $this->germanPerson->getNachname();
    }
}