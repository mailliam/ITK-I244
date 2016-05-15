<?php


function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function logi() {
    	// siia on vaja funktsionaalsust (13. nädalal)

//    if(isset($_SESSION['user'])) {
//        include_once('views/loomavorm.html');
//    }
//	include_once('views/login.html');

if (!empty($_POST)) {
    global $connection;
    $u=mysqli_real_escape_string($connection, $_POST["user"]);
    $p=mysqli_real_escape_string($connection, $_POST["pass"]);
    $errors = array();
    if(!empty($_POST["user"])) {
        $sql = "SELECT id FROM mkeerus_kylastajad WHERE username = '$u' AND passw = SHA1('$p')";
        $result = mysqli_query($connection, $sql);

        if(!$result) {
            $errors[]="Kasutajanimi ja/või parool vale";
        }
    } else {
        $errors[]="Nimi täitmata";
    }

    if(!empty($_POST["pass"])) {
        if(!$result) {
            $errors[]="Kasutajanimi ja/või parool vale";
        }
    } else {
        $errors[]="Parool täitmata";
    }

    if (empty($errors)) {
        header("Location: loomaaed.php?page=loomad");
        session_start();
        if (!isset($_SESSION["teade"])) {
            $_SESSION["teade"]="Oled edukalt sisselogitud";
        }
        if (!isset($_SESSION["user"])) {
            $_SESSION["user"]="user";
        }
        exit(0);
    } else {
        include_once("views/head.html");
        include_once("views/login.html");
        include_once("views/foot.html");
        }

    } else {
        include_once("views/head.html");
        include_once("views/login.html");
        include_once("views/foot.html");
    }
}

function logout() {
	$_SESSION=array();
	session_destroy();
	header("Location: ?");
}

function kuva_puurid() {
	// siia on vaja funktsionaalsust
    global $connection;
    $puurid = array();

    $sql = "SELECT DISTINCT puur FROM mkeerus_loomaaed ORDER BY puur ASC";
    $result = mysqli_query($connection, $sql) or die($sql . " - " . mysqli_error($connection));
    while ($puur = mysqli_fetch_assoc($result)) {
        $puurid[] = $puur;
        $sql2 = "SELECT * FROM mkeerus_loomaaed WHERE puur=".$puur["puur"];
        $result2 = mysqli_query($connection, $sql2) or die($sql2 . " - " . mysqli_error($connection));
        while($loom=mysqli_fetch_assoc($result2)) {
            $puurid[$puur["puur"]][] = $loom;
        }
    }

	include_once('views/puurid.html');

}

function lisa() {
	// siia on vaja funktsionaalsust (13. nädalal)

	include_once('views/loomavorm.html');

}

function upload($name) {
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$allowedTypes = array("image/gif", "image/jpeg", "image/png","image/pjpeg");
	$extension = end(explode(".", $_FILES[$name]["name"]));

	if ( in_array($_FILES[$name]["type"], $allowedTypes)
		&& ($_FILES[$name]["size"] < 100000)
		&& in_array($extension, $allowedExts)) {
    // fail õiget tüüpi ja suurusega
		if ($_FILES[$name]["error"] > 0) {
			$_SESSION['notices'][]= "Return Code: " . $_FILES[$name]["error"];
			return "";
		} else {
      // vigu ei ole
			if (file_exists("pildid/" . $_FILES[$name]["name"])) {
        // fail olemas ära uuesti lae, tagasta failinimi
				$_SESSION['notices'][]= $_FILES[$name]["name"] . " juba eksisteerib. ";
				return "pildid/" .$_FILES[$name]["name"];
			} else {
        // kõik ok, aseta pilt
				move_uploaded_file($_FILES[$name]["tmp_name"], "pildid/" . $_FILES[$name]["name"]);
				return "pildid/" .$_FILES[$name]["name"];
			}
		}
	} else {
		return "";
	}
}

?>
