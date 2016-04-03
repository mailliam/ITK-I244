<?php
header('Content-Type: text/html; charset=utf-8');
    $mingi = "kala";
    $a = 2;
    $b = 6;
    $c = $a + $b;
    echo "Muutuja väärtus on: ".$mingi; //Stringide liitmine punktiga
    echo "<br/>Muutuja väärtus on: $mingi"; //Siin ei käi muutujal punkti ees
    echo "<br/> $a + $b = $c";
    echo '<br/> $a + $b = $c'; //Ülakomade puhul muutujate sisseasendamist ei tehta
    echo '<br/>'.$a. ' + ' .$b. ' = '.$c;

?>
