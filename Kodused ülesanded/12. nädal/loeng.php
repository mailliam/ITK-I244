<?php

$user = "test";
$pass = "t3st3r123";
$db = "test";
$host = "localhost"; //kui faild on enoses ja andmebaas ka enoses, muiudu midagi muud.
$link = mysqli_connect($host, $user, $pass, $db) or die("Ei saanud
ühendust - " . mysqli_error());

$sql = "SELECT * FROM mkeerus_loomaaed";
$result = mysqli_query($link, $sql) or die($sql . " - " . mysqli_error($link));

if(!empty($result)) {
    echo "Loomad olemas!";
}

echo "<pre>";
print_r(mysqli_fetch_array($result));
echo "</pre>";

echo "<pre>";
print_r(mysqli_fetch_assoc($result));
echo "</pre>";

?>
