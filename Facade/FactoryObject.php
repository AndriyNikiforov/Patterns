<?php

class FactoryObject
{
    public function twitterShare()
    {
        return new TwitterShare();
    }

    public function facebookShare()
    {
        return new FacebookShare();
    }
}