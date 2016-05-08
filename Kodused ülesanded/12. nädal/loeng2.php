<?php

$user = "test";
$pass = "t3st3r123";
$db = "test";
$host = "localhost"; //kui faild on enoses ja andmebaas ka enoses, muiudu midagi muud.
$link = mysqli_connect($host, $user, $pass, $db) or die("Ei saanud
ühendust - " . mysqli_error());
mysqli_query($link, "SET CHARACTER SET UTF8");

$sql = "SELECT * FROM mkeerus_loomaaed";
$result = mysqli_query($link, $sql) or die($sql . " - " . mysqli_error($link));
//die tuleb pärast ära korjata: see on turvaauk, kasutaja ei peaks meie
//andmebaasiga seotud veateateid nägema.

while ($rida = mysqli_fetch_assoc($result)) {
    //kontrollib, kas roda on või ei ja siis saab seda muutujat rida kasutada
    echo "Looma nimi on {$rida['nimi']}, ta on {$rida['vanus']} aastat vana ja
    asub {$rida['puur']}.puuris.<br/>";
}

mysqli_free_result($result); //Vabastab need read, mälu. Pole kohustuslik, aga suurte andmemahtude korral on kasulik

mysqli_close($link); //Sulgeb ühenduse, kui näiteks tahta puhta php-ga edasi mb_internal_encoding
                    //Pole kohustuslik, ag aon viisakas

mysqli_query($link, "SET CHARACTER SET UTF8");

?>
