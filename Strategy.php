<?php

interface ArraySort
{
    public function sort($array);
}

class Ksort implements ArraySort
{
    public function sort($array)
    {
         ksort($array);

        return $array;
    }
}

class Asort implements ArraySort
{
    public function sort($array)
    {
        asort($array);

        return $array;
    }
}

class Strategy
{
    public function sortArray(&$array, $sortType)
    {
        switch ($sortType) {
            case 'asort':
                $asort = new Asort();
                $array = $asort->sort($array);
                print_r($array);
                break;
            case 'ksort':
                $ksort = new Ksort();
                $array = $ksort->sort($array);
                print_r($array);
                break;
        }
    }
}

$array = array("1" => "p",
    "2" => "v",
    "4" => "a",
    "3" => "c"
);

$strategy = new Strategy();
$strategy->sortArray($array,'asort');
$strategy->sortArray($array,'ksort');