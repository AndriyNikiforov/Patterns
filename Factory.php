<?php


interface Factory {
    public function getProduct();
}

interface Product {
    public function getName();
}

class Book implements Product
{
    public function getName()
    {
        return 'New book';
    }
}

class BookFactory implements Factory
{
  public function getProduct()
  {
      return new Book();
  }
}

$factory = new BookFactory();
$book = $factory->getProduct();

print_r($book->getName());