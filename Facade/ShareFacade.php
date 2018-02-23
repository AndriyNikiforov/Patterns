<?php

require "ShareInterface.php";
require "TwitterShare.php";
require "FacebookShare.php";
require "FactoryObject.php";

class ShareFacade
{
    private $twitter;
    private $facebook;

    public function __construct(FactoryObject $factoryObject)
    {
        $this->twitter = $factoryObject->twitterShare();
        $this->facebook = $factoryObject->facebookShare();
    }

    public function share($message)
    {
        $this->twitter->setMessage($message);
        $this->twitter->share();

        $this->facebook->setMessage($message);
        $this->facebook->share();
    }
}