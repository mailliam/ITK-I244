<?php
header('Content-Type: text/html; charset=utf-8');
$loom = "lammas";

if ($loom == "kala") {
    echo "luts luts libekala";
} else if ($loom == "koer") {
    echo "der Hund haugt";
} elseif ($loom == "lammas") {
    echo "Määgib";
} else {
    echo "tundmatu olend";
}

switch ($loom) {
    case "kala":
        echo "luts luts libekala";
        break; //Kui breaki eiole, siis ta on järgmine case selle sees
    case "koer":
        echo "der Hund haugt";
        break;
    case "lammas":
        echo "Määgib";
        break;
    default:
        echo "tundmatu olend";
        break;
}

?>
