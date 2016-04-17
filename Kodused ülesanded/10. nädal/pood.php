<?php
session_start();
if (!isset($_SESSION["korv"])) { // tagame, et korv on olemas
    $_SESSION["korv"]=array();
}
$kaubad=array("koer", "kass", "pähklid");

if (!empty($_GET["lisa"])) {
    //kas kaup eksisteerib
    if(isset($kaubad[$_GET["lisa"]])) {
        if (isset($_SESSION["korv"] [$_GET["lisa"]])) {
            $_SESSION["korv"] [$_GET["lisa"]]++;
        } else {
            //lisa korvi
            $_SESSION["korv"] [$_GET["lisa"]]=1;
        }
    }
}

?>

<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ostukorv</title>
    </head>

    <body>
        <?php foreach ($kaubad as $id => $kaup):?>
            <p><?php echo $kaup; ?> <a href="?lisa=<?php echo $id;?>">Lisa</a> </p>
        <?php endforeach; ?>
        <p>Vaata <a href="ostukorv.php">ostukorvi</a></p>

        <pre><?php print_r($_SESSION) ?></pre>


    </body>
</html>
