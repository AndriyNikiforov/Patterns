<?php

class Receiver
{
    private $enableDate = false;

    private $outpt =[];

    public function write($str)
    {
        if($this->enableDate) {
            $str .= ' ['.date('Y-m-d').']';
        }

        $this->outpt[] = $str;
    }

    public function getOutput()
    {
        return join('\n', $this->outpt);
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableDate()
    {
        $this->enableDate = false;
    }
}