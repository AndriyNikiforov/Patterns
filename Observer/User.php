<?php

class User implements \SplSubject
{
    private $name;
    private $email;
    private $observer;

    public function __construct(\SplObjectStorage $splObjectStorage)
    {
        $this->observer = $splObjectStorage;
    }

    public function attach(\SplObserver $observer)
    {
        $this->observer->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observer->detach($observer);
    }

    public function changeEmail($email)
    {
        $this->email = $email;
        $this->notify();
    }

    public function changeName($name)
    {
        $this->name = $name;
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update($this);
        }
    }
}