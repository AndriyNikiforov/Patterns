<?php

class FacebookShare implements ShareInterface
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo sprintf('Sharing "%s" on Facebook', $this->message).PHP_EOL;
    }
}