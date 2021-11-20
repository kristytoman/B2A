<?php
$arr = ['Zlín', 'Brno', 'Praha'];
$items = [
    array('Jablko', 'Hruška', 'Banán'),
    array('Brokolice', 'Cibule', 'Česnek'),
    array('Kuřecí', 'Vepřové', 'Hovězí'),
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        for ($i = 0; $i <= count($arr); $i++) {
            echo '<li>' . $arr[$i] . '</li>' . '<br>';
        }
        ?>
    </ul>

    <ul>
        <?php
        for ($i = 0; $i < count($arr); $i++) {
            echo '<li>' . $arr[$i] . '</li>' . '<br>';
        }
        ?>
    </ul>

    <ul>
        <?php
        foreach ($items as $item) {
            for ($i = 0; $i < count($item); $i++) {
                echo ('
                    <li>' . $item[$i] . '</li>
                    ');
            }
        }
        ?>
    </ul>

    <ul>
        <?php
        for ($i = 0; $i < count($items); $i++) {
            for ($j = 0; $j < count($items[$i]); $j++) {
                echo $items[$i][$j] . ', ';
            }
            echo '<br>';
        }
        ?>
    </ul>

    <ul>
        <?php
        foreach ($items[0] as $item) {
            echo '<li>' . $item . '</li>';
        }
        ?>
    </ul>

    <ul>
        <?php
        foreach ($items[1] as $item) {
            echo '<li>' . $item . '</li>';
        }
        ?>
    </ul>

    <ul>
        <?php
        foreach ($items[2] as $item) {
            echo '<li>' . $item . '</li>';
        }
        ?>
    </ul>
</body>

</html>