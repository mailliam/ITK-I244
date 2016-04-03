<?php

$a = 2;
$b = 6;

function liida() {
    global $a, $b, $c; //Kui siin ei kirjuta global ette, siis ta ei tunnista nende defineerimist
    $c = $a + $b;
    echo "$a + $b = $c";
}

liida();
echo "tulemus oli: $c";

?>
