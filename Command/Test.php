<?php


include "CommandInterface.php";
include "Invoker.php";
include "Receiver.php";
include "HelloCommand.php";

class Test
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $reciver = new Receiver();

        $invoker->setCommand(new HelloCommand($reciver));
        $invoker->run();
        echo $reciver->getOutput().PHP_EOL;
    }
}

$test = new Test();
$test->testInvocation();