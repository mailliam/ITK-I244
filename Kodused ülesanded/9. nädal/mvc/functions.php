<?php
//mudel

function kontrolli_vormi() {
    if (!empty($_POST)) { //vorm esitati, kui post massiiv ei ole üthi
        $errors=array();
        if(!empty($_POST["nimi"])) {
            //tee sellega midagi
        } else {
            $errors[]="nimi puudu";
        }

        if(!empty($_POST["vanus"])) {
            //tee sellega midagi
        } else {
            $errors[]="vanus puudu";
        }
        if(!empty($_POST["sugu"])) {
            //tee sellega midagi
        } else {
            $errors[]="sugu puudu";
        }
        if (empty($errors)) {
            //kõik ok, siin peaks infoga midagi tegema (nt andmebaas või sessioon)
            header("Location: kontroller.php?mode=ok");
            exit(0);
        }
    }
}


 ?>
