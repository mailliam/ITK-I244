<?php
session_start(); //Ei saa lõpetada asja, mida pole alustatud

//muuda sessiooni küpsis kehtetuks
if(isset($_COOKIE[session_name()])) {
    setcookie(session_name(),"", time()-42000,"/");
}

$_SESSION=array();
session_destroy();

header("Location:pood.php"); //suunab kasutaja tagasi

 ?>
