<?php

namespace Patterns\Behavioral\Command;

/**
 * The Receiver
 */
class Golem
{
    /** @var boolean $isOn */
    protected $isOn = false;

    /**
     * @return Golem
     */
    public function activate(): Golem
    {
        $this->isOn = true;

        return $this;
    }

    /**
     * @return Golem
     */
    public function deactivate(): Golem
    {
        $this->isOn = false;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return $this->isOn;
    }
}