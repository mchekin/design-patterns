<?php

namespace Patterns\Structural\Adapter;


class FrenchPersonAdapter implements InternationalPersonInterface
{
    /**
     * @var FrenchPerson
     */
    private $frenchPerson;

    public function __construct(FrenchPerson $frenchPerson)
    {
        $this->frenchPerson = $frenchPerson;
    }

    /**
     * @return string
     */
    public function getFirstname():string
    {
        return $this->frenchPerson->getPrenom();
    }

    /**
     * @return string
     */
    public function getLastname():string
    {
        return $this->frenchPerson->getNomDeFamille();
    }
}