<?php

namespace Patterns\Structural\Adapter;


class GermanPerson
{
    protected $vorname;
    protected $nachname;

    public function __construct(string $vorname, string $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    /**
     * @return string
     */
    public function getVorname():string
    {
        return $this->vorname;
    }

    /**
     * @return string
     */
    public function getNachname():string
    {
        return $this->nachname;
    }
}