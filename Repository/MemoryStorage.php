<?php

namespace Repository;

class MemoryStorage
{
    private $data = [];

    private $lastId = 0;

    public function save(array $data)
    {
        $this->lastId++;

        $data['id'] = $this->lastId;
        $this->data[$this->lastId] = $data;

        return $this->lastId;
    }

    public function find($id)
    {
        if(!isset($this->data[$id])) {
            throw new \OutOfRangeException(sprintf('No data found'));
        }

        return $this->data[$id];
    }

    public function delete($id)
    {
        if(!isset($this->data[$id])) {
            throw new \OutOfRangeException(sprintf('No data found'));
        }

        unset($this->data[$id]);
    }
}