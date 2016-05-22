<?php

session_start();

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

        case 'delete':
            $id = intval($_POST['id']);
            $result = controller_delete($id);
            break;

        case 'register':
            $kasutajanimi = $_POST['kasutajanimi'];
            $parool = $_POST['parool'];
            $result = controller_register($kasutajanimi, $parool);
            break;

        case 'login':
            $kasutajanimi = $_POST['kasutajanimi'];
            $parool = $_POST['parool'];
            $result = controller_login($kasutajanimi, $parool);
            break;

        case 'logout':
            $result = controller_logout();
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

if(!empty($_GET['view'])) {
    switch($_GET['view']) {
        case 'register':
            require 'view_register.php';
            break;
        case 'login':
            require 'view_login.php';
            break;

        default:
            header('Content-Type: text/plain; Charset=utf-8');
            echo 'Tundmatu valik!';
            exit;
    }
} else {
    if(!controller_user()) {
        header('Location: ' . $_SERVER['PHP_SELF'] . '?view=login');
        exit; //tuleb panna kindlasti exit, muidu muutuks allolev view.php nähtavaks, sest programm jätkab tööd
                //Brauser küll ei näita seda välja, aga konsoolist on võimalik järgmist osa näha
    }
    require 'view.php';
}

?>
