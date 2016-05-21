<?php

//Siin ei tee loogikat andmete muutmiseks
//Siin on andmete salvestamise ja laadimise tegevused
//Võimadab laadimist ja salvestamist välja kutsuda

$model_data = array();

function model_load() {
    global $model_data;

    if(empty($_SESSION['ladu'])) {
        $model_data = array();
    } else {
        $model_data = json_decode($_SESSION['ladu'], true);
    }
}

function model_save() {
    global $model_data;
    //muudame model data json stringiks ja salvestame sessiooni muutujasse
    $_SESSION['ladu'] = json_encode($model_data);
    return true;
}

model_load();


?>
