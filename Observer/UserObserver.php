<?php

class UserObserver implements \SplObserver
{
    private $changedUsers = [];

    public function update(\SplSubject $subject)
    {
       $this->changedUsers[] = clone $subject;
    }

    /**
     * @return array
     */
    public function getChangedUsers()
    {
        return $this->changedUsers;
    }
}