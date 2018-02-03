<?php

namespace Patterns\Behavioral\Observer;

// Subject
class CommunicationChannel extends Subject
{
    /**
     * @var string
     */
    private $message;

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->message = $state;
        $this->notifyObservers();
    }

    public function getState() : string
    {
        return $this->message;
    }
}