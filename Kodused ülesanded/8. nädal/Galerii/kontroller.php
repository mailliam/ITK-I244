<?php
header('Content-Type: text/html; charset=utf-8');
$pildid = array(
    array("big" => "Pildid/kyylikud.jpg", "small" => "Thumbs/th_kyylikud.jpg", "alt" => "Küülikud istuvad padjal ja närisid võilillelehti <br/>Üks halva kvaliteediga isetehtud pilt"),
    array("big" => "Pildid/lesib.jpg", "small" => "Thumbs/th_lesib.jpg", "alt" => "Küülik lesib pärast ringitormamist <br/>Üks halva kvaliteediga isetehtud piltik"),
    array("big" => "Pildid/lesib2.jpg", "small" => "Thumbs/th_lesib2.jpg", "alt" => "Küülik lesib, vist laseb leiba luusse <br/>Üks halva kvaliteediga isetehtud pilt"),
    array("big" => "Pildid/söövad.jpg", "small" => "Thumbs/th_söövad.jpg", "alt" => "Küülikud söövad ja ennustavad mingisuguse jalkamängu tulemust <br/>Üks halva kvaliteediga isetehtud pilt"),
    array("big" => "Pildid/söövad2.jpg", "small" => "Thumbs/th_söövad2.jpg", "alt" => "Küülikud söövad ja ennustavad mingisuguse jalkamängu tulemust <br/>Üks halva kvaliteediga isetehtud pilt")
);

$mode="vaikimisi";
if (!empty($_GET['mode'])){
	$mode=$_GET['mode'];
}
/*
if ($mode == "galerii"){
	include("galerii.html");
} elseif ($mode == "login"){
	include("login.html");
}*/
include_once("View/head.html");

switch($mode){
	case "log":
		include("View/log.html");
	break;
	case "reg":
		include("View/reg.html");
	break;
	//default:
		//include();
	//break;
}

include_once("View/menyy.html");
include("View/galerii.html");
include_once("View/foot.html");

?>
