<<?php

session_start();
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

         <pre><?php print_r($_SESSION) ?></pre>


     </body>
 </html>
