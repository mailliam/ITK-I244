<?php
header('Content-Type: text/html; charset=utf-8');
require_once("functions.php");

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
    default:
		kuvaAvaleht();
	break;
}

?>
