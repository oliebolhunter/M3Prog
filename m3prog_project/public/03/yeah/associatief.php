<?php

$verbruik  = array("stofzuiger" => 80, "Wasdroger" => 230, "vaatwasser" => 250, "Kookplaat" => 180, "Laptop" => 300);
$totaal = 0;



foreach($verbruik as $key => $value){

    echo $key . " verbruikt " . $value . "kwh<br/>";

    $totaal = ($totaal + $value);

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <p class="text"><?= $key . " verbruikt " . $value . "kwh<br/>"?></p>
    <h1>Totaal</h1>
    <p class="text"> <?= $totaal ?></p>
</body>
</html>

