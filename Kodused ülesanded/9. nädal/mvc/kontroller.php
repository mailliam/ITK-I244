<?php

require_once("functions.php"); //Ainult ühe korra tuleb kasutada

$mode="";
if(!empty($_GET["mode"])) {
    $mode=$_GET["mode"];
}

switch ($mode) {
    case "ok":
        include("korras.php");
    break;

    case "kontroll":
        kontrolli_vormi();
        include ("pealeht.php");
    break;

    default:
        include("pealeht.php");
    break;
}

?>
