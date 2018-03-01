<?php

include "Record.php";
include "RecordProxy.php";

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testDirty()
    {
        $recordProxy = new RecordProxy([]);
        $recordProxy->username = 'baz';

        $this->assertTrue($recordProxy->isDirty());
    }

    public function testInstance()
    {
        $recordProxy = new RecordProxy([]);
        $recordProxy->username = 'baz';

        $this->assertInstanceOf(RecordProxy::class, $recordProxy);
    }
}


