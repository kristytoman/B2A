<?php
$arr = [1, -8, 5, 7, 8, 12, 85];
$number = 18;
$boolean = true;
$string = 'Stringos frajeros Peckos';

//Větvení
if ($number >= 10) {
    echo $number . ' je větší než 10';
    echo '<br>';
} else if ($number == 18) {
    echo 'číslo je přesně 18';
    echo '<br>';
} else {
    echo $number . ' je menší než 10';
    echo '<br>';
}

if (strlen($string) > $number && !strpos($string, 'č', 0)) {
    echo 'string neobsahuje písmenko č a je delší než ' . $number;
    echo '<br>';
}

if ($number == 18 || $number == 15) {
    echo 'číslo se rovná 18 nebo 15';
    echo '<br>';
}

switch ($number) {
    case 18:
        echo 'číslo se rovná 18';
        echo '<br>';
        break;
    case 19:
        echo 'číslo se rovná 19';
        echo '<br>';
        break;
    case 20:
        echo 'číslo se rovná 20';
        echo '<br>';
        break;
    case 21:
        echo 'číslo se rovná 21';
        echo '<br>';
        break;
}

echo ($boolean) ? 'boolean existuje' : 'boolean neexistuje';

//cykly
echo '<ul>';
foreach ($arr as $num) {
    echo ('
        
        <li>' . $num . '</li>
        
    ');
}
echo '</ul>';

for ($i = 0; $i < count($arr); $i++) {
    if (!($arr[$i] % 2)) {
        echo $arr[$i] . ' je sudé';
        echo '<br>';
    }
}

echo '<br>';

$max = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
        echo 'nové maximum je ' . $max;
        echo '<br>';
    }
}

echo '<br>';

$temp = 0;

while ($temp < 10) {
    echo $temp;
    echo '<br>';
    $temp++;
}

echo '<br>';

do {

    $temp /= 2;
    echo $temp;
    echo '<br>';
    if ($temp < 2) {
        $boolean = false;
    }
} while ($boolean);
