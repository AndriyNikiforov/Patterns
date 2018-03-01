<?php

class RecordProxy
{
    private $isDirty = false;

    private $isInitialized = false;

    public function __construct($data)
    {
        parent::__construct($data);

        if(count($data) > 0) {
            $this->isInitialized = true;
            $this->isDirty = true;
        }
    }

    public function __set($name, $value)
    {
        $this->isDirty = true;

        parent::__set($name, $value);
    }

    public function isDirty()
    {
        return $this->isDirty;
    }
}