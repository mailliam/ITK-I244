<?php
header('Content-Type: text/html; charset=utf-8');

$sona = "raamaturiiul";

if (isset($sona)) {
    for ($i=0; $i < strlen($sona); $i++) {
        $taht = $sona[$i];
        $sonaUus[strlen($sona)-$i] = $taht;
    }

    for ($i=1; $i < strlen($sona)+1 ; $i++) {
        echo "$sonaUus[$i]";
    }
}

?>
