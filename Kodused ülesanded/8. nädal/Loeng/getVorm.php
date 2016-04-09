<?php
    header("content-type: text/plain; charset = utf-8");
    //Vaikimisi on tüüp text/html, aga content-type'ga määratakse sellest erinev tüüp

    if(isset($_GET['loendur']) && isset($_GET['nimi'])) {
        if($_GET['loendur'] != "" && $_GET['nimi'] != "") {
            for ($i=0; $i < $_GET['loendur']; $i++) {
                echo "Sinu nimi on: {$_GET['nimi']}.<br/>\n";
            }
        } else {
            echo "Ükski väli ei tohi tühjaks jääda";
        }

    } else {
        echo "Pole midagi kuvada";
    }

    ?>


<pre>
    <?php print_r($_GET);?>
</pre>
