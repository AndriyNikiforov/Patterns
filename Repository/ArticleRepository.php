<?php

namespace Repository;

class ArticleRepository
{
    private $presistence;

    public function __construct($presistence)
    {
        $this->presistence = $presistence;
    }

    public function findById($id)
    {
        $arrayData = $this->presistence->find($id);

        if(is_null($arrayData)) {
            throw new \InvalidArgumentException(sprintf('Article does not exist', $id));
        }

        return Article::fromState($arrayData);
    }

    public function save(Article $article)
    {
        $id = $this->presistence->save([
           'text' => $article->getText(),
           'title' => $article->getTitle()
        ]);

        $article->setId($id);
    }
}