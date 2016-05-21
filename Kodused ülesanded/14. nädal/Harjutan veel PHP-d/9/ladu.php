<?php

session_start();

$username = 'testkasutaja';
$password = 'testparool';

if(!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != $username || $_SERVER['PHP_AUTH_PW'] != $password) {
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="ladu"');
    //Brauser näitab siinkohal sisselogimisakent
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Autentimine ebaõnnestus';
    exit;
}

require ('model.php'); //Aitab andmeid salvestada ja laadida (andmete kättesaamine)
require ('kontroller.php'); //Loogika andmete muutmiseks - kui on vaja lisada, mida teha, kui vaja kustutada, mida teha

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = false; //KOntrolleri tegevus saab resulti muuta: kui muutub vahepeal true'ks, siis tegevus õnnestus

    switch ($_POST['action']) {
        case 'add':
            $nimetus = $_POST['nimetus'];
            $kogus = intval($_POST['kogus']);
            $result = controller_add($nimetus, $kogus); //kontroller addi tegevuse tulemusena muutub true'ks
            break;

        case 'delete';
            $kustuta = intval($_POST['kustuta']);
            $result = controller_delete($kustuta);
            break;
    }

    if($result) {
        header('Location:' . $_SERVER['PHP_SELF']); //Kui lehte ümber ei suuna, siis ta jätkab kogu aeg samade andmete saatmist
    } else {
        header('Content-Type: text/plain; charset=utf-8');
        echo 'Päring ebaõnnestus';
    }

    exit; //Vahet pole, mis siin toimub, view-d kunagi ei näita
}

require ('view.php'); //Andmete väljakuvamine

?>
