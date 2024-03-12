<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $namen = ["Jona", "Pepijn", "Samuel", "Arturo", "Bert"];
    echo count($namen); 
    echo "<br><br>";
    sort($namen);
    print_r($namen);
    echo "<br><br>";
    $laatste = array_pop($namen);
    echo($laatste);
    echo "<br><br>";
    array_push($namen, "robin");
    sort($namen);
    print_r($namen);
    echo "<br><br>";
    $namen[] = "Batman";
    sort($namen);
    print_r($namen);
    echo "<br><br>";

    $namen_tekst = implode('<br>', $namen);
    echo($namen_tekst);

    ?>
</body>
</html>