<?php

//BEZ NAVRATOVE HODNOTY
function addPHPExtension($fileName)
{
    $fileName = $fileName . 'php';
}

//S NAVRATOVOU HODNOTOU
function sum($a, $b)
{
    return $a + $b;
}

$number = 5;
echo $number . '<br>';

function incrementByOne(&$value)
{
    $value++;
}

incrementByOne($number);
echo $number . '<br>';

$argument = 'toto je argument';

function bar($parameter = 'toto je parametr')
{
    return $parameter;
}

bar($argument);

function defaultUser($name = 'defaultní jméno', $age = 'defaultní věk')
{
    $result = 'Ahoj jmenuji se ' . $name . ' a je mi ' . $age . ' let';

    return '<br>'.$result;
}

echo defaultUser();
echo defaultUser('Venca', 17);
