<?php
$games = ["eldenring", "gta6", "minecraft", "roblox", "fortnite"];


echo $games[2];
echo " <br>";
echo $games[4];
echo "<br>";
print_r($games);
echo "<br>";
var_dump($games);
echo "<br><br>";
echo count($games);
echo "<br><br>";
$games[] = "balastation 5";
print_r($games);
echo "<br><br>";
sort($games);
echo implode('     ', $games);
