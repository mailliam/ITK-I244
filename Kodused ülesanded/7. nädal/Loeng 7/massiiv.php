<?php

header('Content-Type: text/html; charset=utf-8');
$loomad = array("esimene" => "kass", 22 => "koer", "lammas");
//Pole tähtis, kas deklareeritakse ise võtmed või määrab program ise
$loomad[] = "jänes"; //pannakse automaatselt massiivi lõppu ja numbrilise võtmega
$loomad["viimane"] = "siga"; //ettemääratud võtmega

echo "Esimene on ".$loomad["esimene"];
echo "<br/>See on teine loom: ".$loomad[22];
echo "<br/>Veel looma: ".$loomad[23]; //KUna vahepeal on numbriline võti, siis läheb loendus sealt edasi
?>

<hr/>

<?php
$kass = array("toidud" => array("whiskas", "kitkat", "kassitoit"), "nimi" => "Triibik",
"värv" => "Vesihall");
echo $kass["toidud"][2];
?>

</hr>

<?php
foreach ($kass as $vaartus) {
    echo "</br>$vaartus";
}

foreach ($kass as $voti => $vaartus) {
    echo "<br> $voti = $vaartus";
}

echo "<hr/><pre>";
print_r($kass);
echo "<pre>";

?>
