<?php

include 'LoggerInterface.php';
include "NullLoger.php";
include "PrintLogger.php";
include "Service.php";

class Test
{
    public function testNullObject()
    {
        $service = new Service(new NullLoger());
        echo 'Null'.PHP_EOL;
        $service->doSomething();
    }

    public function testStandardLoger()
    {
        $service = new Service(new PrintLogger());
        $service->doSomething();
    }
}

$test = new Test();
$test->testNullObject();
$test->testStandardLoger();
die;