<?php
header('Content-Type: text/html; charset=utf-8');

$loomad = array(
            array("nimi" => "Tümpsa", "vanus" => "2", "värv" => "castor", "pilt" => "Pildid/th_kyylikud.jpg"),
            array("nimi" => "Tobi", "vanus" => "2", "värv" => "black otter", "pilt" => "Pildid/th_lesib2.jpg")

        );

if (isset($loomad)) {
    foreach ($loomad as $loom) {
        include ("loom.html");
    }
}


?>
