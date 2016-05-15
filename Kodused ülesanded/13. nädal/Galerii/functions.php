<?php

function connect_db() {
    global $connection;
    $host="localhost";
    $user="test";
    $pass="t3st3r123";
    $db="test";
    $connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa mootoriga ühendust");
    mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function pildid() {
    global $connection; //huvitav, miks ma uuesti pean selle siin kirjtama?
    $pildid = array();
    $sql = "SELECT * FROM mkeerus_pildid3";
    $result = mysqli_query($connection, $sql) or die($sql . " - " . mysqli_error($connection));
    while ($pilt = mysqli_fetch_assoc($result)) {
        //array_push($pildid, $rida);
        $pildid[]=$pilt;
    }

}

function alusta_sessioon() {
	// siin ees võiks muuta ka sessiooni kehtivusaega, aga see pole hetkel tähtis
	session_start();
	}

function lopeta_sessioon() {
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

        global $connection;

        $errors=array();
        if(!empty($_POST["username"]) && !empty($_POST["password"])) {

            $u=mysqli_real_escape_string($connection, $_POST["username"]);
            $p=mysqli_real_escape_string($connection, $_POST["password"]);
            
            $sql = "SELECT id FROM mkeerus_users WHERE username = '$u' AND password = SHA1('$p')";
            $result = mysqli_query($connection, $sql);

            if(!$result) {
                $errors[]="Kasutajanimi ja/või parool vale";
            }
        } else {
            $errors[]="Kasutajanimi ja/või parool täitmata";
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
