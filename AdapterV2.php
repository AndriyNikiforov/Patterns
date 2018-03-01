<?php

interface ITarget
{
    public function query();
}

interface IAdaptee
{
    public function request();
}

class Adaptee implements IAdaptee
{
    public function request()
    {
        return __CLASS__.'::'.__METHOD__;
    }
}

class AdapterV2 implements ITarget
{
    private $adaptee = null;

    public function __construct()
    {
        $this->adaptee = new Adaptee();
    }

    public function query()
    {
        return $this->adaptee->request();
    }
}

$Target = new AdapterV2();
print $Target->query().PHP_EOL;
die;