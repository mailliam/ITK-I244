<<?php

session_start();

if (!isset($_SESSION["korv"])) { // tagame, et korv on olemas
    $_SESSION["korv"]=array();
}

$kaubad=array("koer", "kass", "pähklid");

 ?>

 <!doctype HTML>
 <html>
     <head>
         <meta charset="utf-8">
         <title>Ostukorv</title>
     </head>

     <body>
         <?php foreach ($_SESSION["korv"] as $id => $kogus):?>
             <p><?php echo $kaubad[$id]; ?> <?php echo $kogus; ?> tk </p>
         <?php endforeach; ?>
         <p>Vaata <a href="pood.php">poodi</a></p>
         <p><a href="lopeta.php">Tühjenda ostukorv</a></p>

         <pre><?php print_r($_SESSION) ?></pre>

     </body>
 </html>
