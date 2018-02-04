<?php

namespace Patterns\Behavioral\State;


class EatingState extends State
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
        return "eating";
    }

    public function handleRequest()
    {
        $sleepingState = $this->dragon->getSleepingState();

        $this->dragon->setState($sleepingState);
    }
}