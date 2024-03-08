<?php

$getal1 = 46.78325;
$afgerond1 = round($getal1);
$getal2 = 46.78325;
$afgerond2 = floor($getal2);

echo "Als je $getal1 afrond naar boven dan krijg je $afgerond1";
echo "Als je $getal2 afrond naar beneden dan krijg je $afgerond2";
echo '<br>';
echo '<br>';




$random1 = rand();
echo $random1;
echo '<br>';

$random2 = rand();
echo $random2;
echo '<br>';
$random3 = rand();
echo $random3;
echo '<br>';
echo '<br>';

$uikomst1 = ($random1 + $random2);
echo $uikomst1;
echo '<br>';
echo '<br>';

$uikomst2 = ($uikomst1 / $random3);
echo $uikomst2;

?>