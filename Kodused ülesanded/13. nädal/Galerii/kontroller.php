<?php
header('Content-Type: text/html; charset=utf-8');
require_once("functions.php");
alusta_sessioon();
connect_db();

$pildid = pildid();

$mode="vaikimisi";
if (!empty($_GET['mode'])){
	$mode=$_GET['mode'];
}

switch($mode){
    case "avaleht":
        kuvaAvaleht();
    break;
	case "login":
		kuvaSisselogimine();
	break;
	case "reg":
		kuvaRegistreerimine();
	break;
    case "galerii":
        kuvaGalerii();
    break;
    case "lisamine":
        kuvaPildiLisamine();
    break;
    case "logout":
        kuvaValjalogimine();
    break;
    default:
		kuvaAvaleht();
	break;
}

?>
