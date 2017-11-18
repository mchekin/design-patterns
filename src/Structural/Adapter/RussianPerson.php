<?php

namespace Patterns\Structural\Adapter;


class RussianPerson
{
    protected $imya;
    protected $familiya;

    public function __construct(string $imya, string $familiya)
    {
        $this->imya = $imya;
        $this->familiya = $familiya;
    }

    /**
     * @return string
     */
    public function getImya():string
    {
        return $this->imya;
    }

    /**
     * @return string
     */
    public function getFamiliya():string
    {
        return $this->familiya;
    }
}