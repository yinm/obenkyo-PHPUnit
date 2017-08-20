<?php

class Subject
{
    protected $observers = [];
    protected $name;

    public function __construct($name)
    {
        $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function doSomething()
    {
        $this->notify('something');
    }

    public function doSomethingBad()
    {
        foreach ($this->observers as $observer) {
            $observer->reportError(42, 'Something bad happened', $this);
        }
    }

    protected function notify($argument)
    {
        foreach ($this->observers as $observer) {
            $observer->update($argument);
        }
    }
}

class Observer
{
    public function update($argument)
    {

    }

    public function reportError($errorCode, $errorMessage, Subject $subject)
    {

    }
}
