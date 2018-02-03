<?php

namespace Patterns\Behavioral\Observer;

// Observer
class Person extends Observer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $messageFeed = [];

    /**
     * Person constructor.
     * @param Subject $subject
     * @param string $name
     */
    public function __construct(Subject $subject, string $name)
    {
        parent::__construct($subject);
        $this->name = $name;
    }

    public function update()
    {
        $this->messageFeed[] = $this->subject->getState();
    }

    /**
     * @return Person
     */
    public function logout() : Person
    {
        $this->subject->detach($this);

        return $this;
    }

    /**
     * @param $message
     * @return Person
     */
    public function say($message) : Person
    {
        $this->subject->setState("$this->name: $message");

        return $this;
    }

    /**
     * @return array
     */
    public function getMessageFeed(): array
    {
        return $this->messageFeed;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}