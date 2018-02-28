<?php

include "FlyweightInterface.php";
include "CharacterFlyweight.php";
include "FlyweightFactory.php";

 $characters = ['a', 'b', 'c'];
 $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];


$factory = new FlyweightFactory();

foreach ($characters as $char) {
    foreach ($fonts as $font) {
        $flyweight = $factory->get($char);
        $rendered = $flyweight->render($font);

        echo sprintf('Character %s with font %s', $char, $font).PHP_EOL;
    }
}

echo count($factory)."  ".count($characters);