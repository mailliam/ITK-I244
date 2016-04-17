<?php

function kuvaAvaleht() {
    include_once("View/head.html");
    include_once("View/menyy.html");
    include("View/avaleht.html");
    include_once("View/foot.html");
}


function kuvaSisselogimine() {
    if (!empty($_POST)) {
        $errors=array();
        if(!empty($_POST["username"])) {
            //tee sellega midagi
        } else {
            $errors[]="Nimi täitmata";
        }

        if(!empty($_POST["password"])) {
            //tee sellega midagi
        } else {
            $errors[]="Parool täitmata";
        }

        if (empty($errors)) {
            header("Location: kontroller.php?mode=galerii");
            exit(0);
        } else {
            include_once("View/head.html");
            include_once("View/menyy.html");
            include("View/log.html");
            include_once("View/foot.html");
        }

    } else {
        include_once("View/head.html");
        include_once("View/menyy.html");
        include("View/log.html");
        include_once("View/foot.html");
    }
}


function kuvaRegistreerimine() {
    include_once("View/head.html");
    include_once("View/menyy.html");
    include("View/reg.html");
    include_once("View/foot.html");
}

function kuvaGalerii() {
    global $pildid;
    include_once("View/head.html");
    include_once("View/menyy.html");
    include("View/galerii.html");
    include_once("View/foot.html");
}

function kuvaPildiLisamine() {
    include_once("View/head.html");
    include_once("View/menyy.html");
    include("View/pildilisamine.html");
    include_once("View/foot.html");
}

 ?>
