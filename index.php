<?php

$tuition = 979;
$tuition = 1000;
$tuition = 1000;
$tuition = 1000;
$tuition = 1000;

$commission = $tuition>=20000 ? (0.25*$tuition) : ( ($tuition>=10000 && $tuition<20000) ? (0.20*$tuition): ( ($tuition<10000 && $tuition>=7000) ? (0.15*$tuition): "invalid data" ) );

echo "The Commision is $commission";

?>       