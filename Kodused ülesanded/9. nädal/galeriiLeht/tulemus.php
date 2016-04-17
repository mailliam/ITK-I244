<h3>Valiku tulemus</h3>
<P>
    <?php if (!empty($_POST["pilt"])) {
        if(in_array(isset($pildid[$_POST["pilt"]-1]), $pildid)) {

            echo "Valik tehtud. Sinu valik oli pilt nr. ".$_POST["pilt"].".";?>
            <br/>
            <img src="<?php echo $pildid[$_POST["pilt"]-1]["src"];?>" alt="<?php echo $pildid[$_POST["pilt"]-1]["alt"] ?>" height="100"/>
            <?php
        } else {
            echo "Sellist pilti ei ole valikus.";
        }

    } else {
        echo "Sa ei valinud ühtegi pilti.";
    }?>
</p>
