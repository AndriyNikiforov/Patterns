<?php

namespace Repository;

include "Article.php";
include "ArticleRepository.php";
include "MemoryStorage.php";

class TestRepository
{
    private $repository = null;
    private $article = null;

    public function __construct(Article $article, ArticleRepository $repository)
    {
        $this->article = $article;
        $this->repository = $repository;
    }

    public function testRepositorySave()
    {
        $this->repository->save($this->article);

        print_r('success ');
    }

    public function testRepositoryFind()
    {
        $article_id = $this->article->getId();

        $article = $this->repository->findById($article_id);

        print_r($article);
    }
}

$repository = new ArticleRepository(new MemoryStorage());
$article = new Article(null,'Repository Pattern', 'Design Patterns php');
$test = new TestRepository($article, $repository);
$test->testRepositorySave();
$test->testRepositoryFind();