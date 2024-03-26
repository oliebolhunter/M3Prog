<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $weer = array("dinsdag" => "10c", "woensdag" => "10c", "donderdag" => "12c");
    //print_r($weer);
    ?>
    <table>
<tr>
    <td>
    dag
    </td>
    <td>
    graden   
    </td>
</tr>

<?php 
foreach($weer as $key => $value)
{
?>

<tr>
    <td>
    <?= $key ?>
    </td>
    <td>
    <?= $value ?> 
    </td>
</tr>
<?php
    }
    ?>
    </table>
</body>
</html>