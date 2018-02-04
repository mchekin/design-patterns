<?php

namespace Patterns\Behavioral\State;


class FlyingState extends State
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
        return "flying";
    }

    public function handleRequest()
    {
        $eatingState = $this->dragon->getEatingState();

        $this->dragon->setState($eatingState);
    }
}