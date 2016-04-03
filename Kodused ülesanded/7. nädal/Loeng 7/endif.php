<?php
    $tingimus = true;
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP harjutus</title>
    </head>

    <body>
        <p>See tekst kuvatakse alati</p>
        <?php if($tingimus): ?>
            <p>Mind kuvatakse siis kui tingimus kehtib</p>
        <?php endif; ?>
        <p>See tekst kuvatakse alati</p>

        <?php if($tingimus) { ?>
            <p>Mind kuvatakse siis kui tingimus kehtib</p>
        <?php } ?>
    </body>
</html>
