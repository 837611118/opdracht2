<?php
// auteur: Abdulrahman Argalah
// functie: uitleg datum functie


$Today = date("l j F Y");
echo "Het is vandaag: $Today.<br>";
$dayOfYear = date("z") ;
echo "Vandaag is het de $dayOfYear" . "e dag van het jaar.<br>"; 
$dayOfWeek = date("N");
echo "Vrijdag is de $dayOfWeek" . "e dag van de week.<br>";

$daysInMonth = date("t");
$month = date("F");
echo "De maand $month heeft in totaal $daysInMonth dagen.<br>";

$isLeapYear = date("Y ");
echo "Het jaar $isLeapYear is geen schrikkeljaar. <br>";


 

?>
