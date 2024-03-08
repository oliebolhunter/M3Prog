<?php
$liter1 = 15.0;
$tank = 50.0;
$afstand = 1085.73;
$euro95 = 1.89;
$treinreis = 60;

$aantalKMPerTank = $tank * $liter1;
echo $aantalKMPerTank;
echo '<br><br>';

$aantalliter = ($afstand / $liter1);
echo $aantalliter;
echo '<br><br>';

$aantaltank = ($afstand / $aantalKMPerTank);
echo $aantaltank;
echo '<br><br>';

$kosten = ($euro95 *$aantalliter);
echo ($kosten);
echo '<br><br>';

if ($kosten > $treinreis)
    echo 'ik ga met de trein';
else
echo 'ik ga met de auto';