<?php

function controller_add($nimetus, $kogus) {
    global $model_data;

    if($nimetus == '' || $kogus <= 0) {
        return false; //Kui ei õnnestunud, siis on false
    }
    $model_data[] = array(
        'nimetus' => $nimetus,
        'kogus' => $kogus
    );

    return model_save();
}

function controller_delete($index) {
    global $model_data;

    $uus_massiiv = array();

    foreach ($model_data as $key => $value) {
        if($key != $index) {
            $uus_massiiv[] = $value;
        }
    }

    $model_data = $uus_massiiv;

    return model_save();
}

?>
