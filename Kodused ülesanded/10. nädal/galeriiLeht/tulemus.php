<h3>Valiku tulemus</h3>
<P>
    <?php if (!empty($_POST["pilt"])) {
        if(in_array(isset($pildid[$_POST["pilt"]-1]), $pildid)) {
            $_SESSION["valitud"]=$_POST["pilt"];
            echo "Valik tehtud. Sinu valik oli pilt nr. ".$_POST["pilt"].".";?>
            <br/>
            <img src="<?php echo $pildid[$_POST["pilt"]-1]["src"];?>" alt="<?php echo $pildid[$_POST["pilt"]-1]["alt"] ?>" height="100"/>
            <?php
        } else {
            echo "Sellist pilti ei ole valikus.";
        }

    } else {
        if (!empty($_SESSION["valitud"])) {
            echo "Oled oma valiku juba teinud. Sinu valik oli pilt nr. ".$_SESSION["valitud"].".";?>            

        <?php } else {
            echo "Sa ei valinud ühtegi pilti.";
        }

    }?>
</p>
