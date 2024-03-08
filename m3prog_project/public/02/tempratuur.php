<?php
// Fahrenheit naar celsius
$farenheit = 74;
$celsius = ($farenheit - 32) / 1.8;
echo "{$farenheit} graden Farenheit = {$celsius} graden celsius. <br/>";

//celsius naar ferheit
$celsius = 12;
$farenheit = ($celsius * 1.8) + 32; 
echo "{$celsius} graden celsius = {$farenheit} graden farenheit. <br/>";


//celsius naar kelvin

$celsius = 12;
$kelvin = ($celsius + 273);
echo "{$celsius} graden celsius = {$kelvin} graden kelvin. <br/>";


//fahrenheit naar kelvin

$farenheit = 56;
$kelvin = (($farenheit - 32) / 1.8) +273;
echo "{$farenheit} graden fahrenheit = {$kelvin} graden kelvin.";