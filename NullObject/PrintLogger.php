<?php

class PrintLogger implements LoggerInterface
{
    public function log($str)
    {
        echo $str.PHP_EOL;
    }
}