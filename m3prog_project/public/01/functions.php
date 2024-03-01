<?php
    
    $naam = "Dowen electronics"; 
    $lengte = strlen($naam);
    echo "De lengte van  " . $naam . " is: " . $lengte;
    
    $str = "Ik hou van frikandellen met speciale dip";
    $str = strtoupper($str);
    echo $str;


    $filename = '../index.php';
$exist=file_exists($filename);
echo $exist;
    if ($exist) {
        echo "The file $filename exists";
    } else {
        echo "The file $filename does not exist";
    }



    $mystring = 'pepijn, jona, samuel, bert, snert';
$findme   = 'bert';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
?>
