<?php

namespace Patterns\Behavioral\State;


class SleepingState extends State
{
    /**
     * @var Dragon
     */
    private $dragon;

    public function __construct(Dragon $dragon)
    {
        $this->dragon = $dragon;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "sleeping";
    }

    public function handleRequest()
    {
        $flyingState = $this->dragon->getFlyingState();

        $this->dragon->setState($flyingState);
    }
}