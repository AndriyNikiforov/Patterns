<?php

namespace Repository;

class Article
{
    private $id;
    private $title;
    private $text;

    public static function fromState(array $state)
    {
        return new self(
            $state['id'],
            $state['title'],
            $state['text']
        );
    }

    public function __construct($id, $title, $text)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }
}