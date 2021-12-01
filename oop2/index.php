<?php

require_once(__DIR__ . '/classes/School.php');
require_once(__DIR__ . '/classes/Student.php');
require_once(__DIR__ . '/classes/Teacher.php');

$school1 = new School('Zlín', '9.ZŠ Štefánikova', 'Základní škola', 300);
$student1 = new Student('Václav', 'Gazda', '20/1/2004', '29/9/2021');
$teacher1 = new Teacher('Ing.', 'Jan', 'koželuh', '27/8/1998');

$school1->sayInfo();
$student1->sayInfo();
$teacher1->sayInfo();

