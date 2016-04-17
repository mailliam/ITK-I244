<?php

if (empty($_COOKIE["esimene"])) {
    setcookie("esimene", "soola", time()+60*10);
    echo "Küpsis loodud";
} else {
    echo "Küpsis oli juba olemas, väärtus oli: ".$_COOKIE["esimene"];
}


?>
