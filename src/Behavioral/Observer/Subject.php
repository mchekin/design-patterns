<?php

namespace Patterns\Behavioral\Observer;

abstract class Subject
{
    private $observers = [];

    public abstract function setState(string $state);

    public abstract function getState() : string;

    public function attach(Observer $observer) : Subject
    {
        $objectHash = spl_object_hash($observer);
        $this->observers[$objectHash] = $observer;

        return $this;
    }

    public function detach(Observer $observer) : Subject
    {
        $objectHash = spl_object_hash($observer);
        unset($this->observers[$objectHash]);

        return $this;
    }

    public function notifyObservers() : Subject
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }

        return $this;
    }
}