<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vormi uuesti täitmine</title>
    </head>

    <body>
        <div id="wrap">
            <ul id="menu">
                <li><a href="pealeht.php">Pealeht</a></li>
                <li><a href="pealeht.php">Pealeht</a></li>
            </ul>
            <div id="content">
                <form action="kontroller.php?mode=kontroll" method="POST">

                    Nimi: <input type="text" name="nimi" <?php if(!empty($_POST["nimi"]))
                    echo "value=\"".htmlspecialchars($_POST["nimi"])."\"";?>/><br/>

                    Vanus: <input type="number" name="vanus" <?php if(!empty($_POST["vanus"])
                    && is_numeric($_POST["vanus"]))
                    echo "value=\"".htmlspecialchars($_POST["vanus"])."\"";?> /><br/>

                    Sugu:<br/>
                    <label><input type="radio" name="sugu" value="m" <?php
                    if(!empty($_POST["sugu"]) && $_POST["sugu"]=="m")
                    echo "checked";?> />M</label>
                    <label><input type="radio" name="sugu" value="n" <?php
                    if(!empty($_POST["sugu"]) && $_POST["sugu"]=="n")
                    echo "checked";?> />N</label><br/>

                    Kood: <input type="text" name="kood" <?php if(!empty($_POST["kood"]))
                    echo "value=\"".htmlspecialchars($_POST["kood"])."\"";?> /><br/>

                    Kommentaar: <textarea name="komm"><?php if(!empty($_POST["komm"]))
                    echo htmlspecialchars($_POST["komm"]);?></textarea><br/>

                    <input type="submit" name="s" value="Registreeri"/>
                </form>

                <?php if(!empty($errors)): ?>
                    <?php foreach ($errors as $e): ?>
                        <p style="color:red"><?php echo $e; ?></p>
                    <?php endforeach; ?>

                <?php endif; ?>

            </div>
        </div>
    </body>

</html>
