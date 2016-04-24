<!doctype html>
<?php
$jooneLaius="2";
$jooneStiil="dashed";
$taustaVarv="#ffffff";
$tekstiVarv="#000000";
    if (!empty($_POST['taustaVarv'])) {
        $taustaVarv=htmlspecialchars($_POST['taustaVarv']);
    }

    if (!empty($_POST['tekstiVarv'])) {
        $tekstiVarv=htmlspecialchars($_POST['tekstiVarv']);
    }

    if (!empty($_POST['jooneLaius'])) {
        $jooneLaius=htmlspecialchars($_POST['jooneLaius']);
    }

    if (!empty($_POST['jooneStiil'])) {
        $jooneStiil=htmlspecialchars($_POST['jooneStiil']);
    }
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Muudetav tekst</title>
        <style>
            body {
                background-color: #3181B4;
            }

            #muudetudTekst {
                border: <?php echo $jooneLaius; ?>px <?php echo $jooneStiil; ?> lime;
                border-radius: 30px;
                min-height: 50px;
                max-width: 500px;
                background-color:<?php echo $taustaVarv; ?>;
                color:<?php echo $tekstiVarv; ?>;
                margin-bottom: 30px;
                padding: 15px;
            }
        </style>
    </head>

    <body>
        <div id="muudetudTekst">
            <?php
                if (!empty($_POST['tekstIse'])) {
                    echo "{$_POST['tekstIse']}";
                }
            ?>
        </div>

        <form method="POST" action="muutuvTekst.php">
            <table>
                <tr>
                    <th>Siia kirjuta tekst</th>
                    <td><input type="text" name="tekstIse" <?php if(!empty($_POST["tekstIse"]))
                    echo "value=\"".htmlspecialchars($_POST["tekstIse"])."\"";?>/> </td>
                </tr>
                <tr>
                    <th>Vali teksti värv</th>
                    <td><input type="color" name="tekstiVarv" <?php if(!empty($_POST["tekstiVarv"]))
                    echo "value=\"".htmlspecialchars($_POST["tekstiVarv"])."\"";?>/></td>
                </tr>
                <tr>
                    <th>Vali tausta värv</th>
                    <td><input type="color" name="taustaVarv" value="#ffffff" <?php if(!empty($_POST["taustaVarv"]))
                    echo "value=\"".htmlspecialchars($_POST["taustaVarv"])."\"";?>/></td>
                </tr>
                <tr>
                    <th>Vali joone laius</th>
                    <td><input type="range" name="jooneLaius" min="0" max="20" step="1" value="2" <?php if(!empty($_POST["jooneLaius"]))
                    echo "value=\"".htmlspecialchars($_POST["jooneLaius"])."\"";?>/></td>
                </tr>
                <tr>
                    <th>Vali joone stiil</th>
                    <td>
                        <select name="jooneStiil">
                            <option value="dashed" <?php if(!empty($_POST["jooneStiil"]) && $_POST["jooneStiil"] == "dashed"){ echo ' selected = "selected" ';} ?>>Dashed</option>
                            <option value="solid" <?php if(!empty($_POST["jooneStiil"]) && $_POST["jooneStiil"] == "solid"){ echo ' selected = "selected" ';} ?>>Solid</option>
                            <option value="double" <?php if(!empty($_POST["jooneStiil"]) && $_POST["jooneStiil"] == "double"){ echo ' selected = "selected" ';} ?>>Double</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Vaata teksti"></td>
                </tr>
            </table>
        </form>

        <p>
            <a href="http://validator.w3.org/check?uri=referer">
                <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
            </a>

            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
            </a>
        </p>

    </body>

</html>
