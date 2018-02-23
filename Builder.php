<?php

/**
 * Class Pizza
 */
class Pizza
{
    private $namePizza;
    private $sizePizza;
    private $ingredientsPizza;

    public function setName($namePizza)
    {
        $this->namePizza = $namePizza;
    }

    public function setSize($sizePizza)
    {
        $this->sizePizza = $sizePizza;
    }

    public function setIngridients($ingridientsPizza)
    {
        $this->ingredientsPizza = $ingridientsPizza;
    }
}

/**
 * Class Builder
 */
abstract class Builder
{
    protected $pizza;

    final public function getPizza()
    {
        return $this->pizza;
    }

    public function buildPizza()
    {
        $this->pizza = new Pizza();
    }
}

/**
 * Class PizzaBuilder
 */
class PizzaBuilder extends Builder
{
    public function buildPizza()
    {
        parent::buildPizza();
        $this->pizza->setName('Diablo');
        $this->pizza->setSize(50);
        $this->pizza->setIngridients('Chili, Bacon, Chicken, Diablo souse, cheese');
    }
}

/**
 * Class Factory
 */
class Factory
{
    private $pizza;

    public function __construct(Builder $builder)
    {
        $this->pizza = $builder;
        $this->pizza->buildPizza();
    }

    public function getPizza()
    {
        return $this->pizza->getPizza();
    }
}

$pizza = new Factory(new PizzaBuilder());

print_r($pizza->getPizza());