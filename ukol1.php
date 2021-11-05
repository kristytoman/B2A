<?php

//Konstanta
const titleChoice = 1;
const maxPoints = 14.0;

//Deklarace proměnných
$userIdentifier;
$userFullName;
$userAge;
$userPoints;
$userItems;
$userIsAdmin;

//Inicializace proměnných

$userIdentifier = 1;
$userFullName = "Václav Gazda";
$userAge = 12;
$userPoints = 5.4;
$userTitles = ["Ing." , "Frajeros"];
$userIsAdmin = true;
$userFullNameWithTitles = $userTitles[titleChoice]." ".$userFullName;

echo $userIdentifier + $userPoints;
echo "<br>";
echo "Uživatel ".$userFullNameWithTitles." získal ".$userPoints."/".maxPoints;
