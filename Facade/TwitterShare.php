<?php

class TwitterShare
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo sprintf('Sharing "%s" on Twitter', $this->message).PHP_EOL;
    }
}