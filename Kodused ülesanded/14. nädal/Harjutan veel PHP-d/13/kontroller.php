<?php


function controller_add($nimetus, $kogus) {
    if(!controller_user()) {
        return false;
    }
    if($nimetus == '' || $kogus <= 0) {
        return false;
    }

    return model_add($nimetus, $kogus);
}

function controller_delete($id) {
    if(!controller_user()) {
        return false;
    }
    if($id <= 0) {
        return false;
    }
    return model_delete($id);
}

function controller_register($kasutajanimi, $parool) {
    if($kasutajanimi == '' || $parool = '') {
        return false;
    }
    return model_user_add($kasutajanimi, $parool);
}

function controller_login($kasutajanimi, $parool) {
    if($kasutajanimi == '' || $parool = '') {
        return false;
    }
    $id = model_user_get($kasutajanimi, $parool);

    if(!$id) {
        return false;
    }

    session_regenerate_id(); //Sessioonivõti peaks muutuma vastavalt olekule - kas oled sisselogitud või väljalogitud

    $_SESSION['login'] = $id;
    return $id;
}

function controller_user() {
    if(empty($_SESSION['login'])) {
        return false;
    }
    return $_SESSION['login'];
}

function controller_logout() {
    if(isset($_COOKIE[session_name()])) { //Kui cookie on seatud sessiooni nimega
        setcookie(session_name(), '', time()-42000, '/');
    }
    $_SESSION = array();
    session_destroy();
    return true;
}


?>
