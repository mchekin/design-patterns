<?php

namespace Patterns\Structural\Bridge;

abstract class Race
{
    /**
     * @var Profession
     */
    protected $profession;

    public function __construct(Profession $profession)
    {
        $this->profession = $profession;
    }

    abstract public function attack();

}