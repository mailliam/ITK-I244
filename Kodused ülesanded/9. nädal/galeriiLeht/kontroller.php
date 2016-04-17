<?php

$pildid = array(
    array("value"=>"1", "label"=>"p1", "src" => "pildid/nameless1.jpg", "alt" => "nimetu 1"),
    array("value"=>"2", "label"=>"p2", "src" => "pildid/nameless2.jpg", "alt" => "nimetu 2"),
    array("value"=>"3", "label"=>"p3", "src" => "pildid/nameless3.jpg", "alt" => "nimetu 3"),
    array("value"=>"4", "label"=>"p4", "src" => "pildid/nameless4.jpg", "alt" => "nimetu 4"),
    array("value"=>"5", "label"=>"p5", "src" => "pildid/nameless5.jpg", "alt" => "nimetu 5"),
    array("value"=>"6", "label"=>"p6", "src" => "pildid/nameless6.jpg", "alt" => "nimetu 6")
);

require_once("head.html");

$page="vaikimisi";
if (!empty($_GET["page"])){
	$page=$_GET["page"];
}

switch($page){
    case "pealeht":
        include("pealeht.php");
    break;
    case "galerii":
        include("galerii.php");
    break;
    case "vote":
        include("vote.php");
    break;
    case "tulemus":
        include("tulemus.php");
    break;
    default:
		include("pealeht.php");
	break;
}


require_once("foot.html");

?>
