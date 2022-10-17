<?php
$euro=6.55957;
printf("%.2f FF<br/>",$euro);
$money1=68.75;
$money2=54.35;
$money = $money1+$money2;

echo "affichage sans printf : " . $money . "<br/>";

$monformat =sprintf("%01.2f", $money);

echo "affichage avec printf : " . $monformat . "<br/>";

$year="2022";
$month="4";
$day="5";
$varDate=sprintf("%04d-%02d-%02d", $year, $month, $day);

echo "affichage avec sprintf : " . $varDate;
?>