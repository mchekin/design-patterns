<?php

namespace Patterns\Behavioral\Observer;


abstract class Observer
{
    /**
     * @var Subject
     */
    protected $subject;

    /**
     * @return mixed
     */
    public abstract function update();

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $subject->attach($this);
    }
}