<?php
header('Content-Type: text/html; charset=utf-8');
echo "See $asi ei tööta";

$i = 0;
while ($i < 10) {
    echo "Tere!";
    $i++;
}

?>

<hr/>

<?php
header('Content-Type: text/html; charset=utf-8');
$asi = "olemas!";
if (isset($asi)) { //Kui see osa on olemas, siis vigane kood lihtsalt ei tööta

    echo "See $asi ei tööta";

    $i = 0;
    while ($i < 10) {
        echo "Tere!";
        $i++;
    }
}

?>
