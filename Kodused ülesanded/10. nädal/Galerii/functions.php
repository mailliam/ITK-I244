<?php

function alusta_sessioon(){
	// siin ees võiks muuta ka sessiooni kehtivusaega, aga see pole hetkel tähtis
	session_start();
	}

function lopeta_sessioon(){
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {
 	 setcookie(session_name(), '', time()-42000, '/');
	}
	session_destroy();
}

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
            if($_POST["username"]!="kasutaja") {
                $errors[]="Kasutajanimi ja/või parool vale";
            }
        } else {
            $errors[]="Nimi täitmata";
        }

        if(!empty($_POST["password"])) {
            if($_POST["username"]!="kasutaja") {
                $errors[]="Kasutajanimi ja/või parool vale";
            }
        } else {
            $errors[]="Parool täitmata";
        }


        if (empty($errors)) {
            header("Location: kontroller.php?mode=galerii");
            session_start();
            if (!isset($_SESSION["teade"])) {
                $_SESSION["teade"]="Oled edukalt sisselogitud";
            }
            if (!isset($_SESSION["sisselogitud"])) {
                $_SESSION["sisselogitud"]="sisselogitud";
            }
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
    $errorPuudubOigus=array();
    if(!empty($_SESSION["sisselogitud"])) {
        include_once("View/head.html");
        include_once("View/menyy.html");
        include("View/pildilisamine.html");
        include_once("View/foot.html");
    } else {
        $errorPuudubOigus[]="Pilte saavad lisada ainult sisselogitud kasutajad";
        kuvaAvaleht();        
    }
}

function kuvaValjalogimine() {
    lopeta_sessioon();
    include_once("View/head.html");
    include_once("View/menyy.html");
    include("View/avaleht.html");
    include_once("View/foot.html");
}

 ?>
