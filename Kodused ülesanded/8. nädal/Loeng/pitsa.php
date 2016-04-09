<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP get</title>
    </head>
    <body>
        <form method="POST" action="?valik"/>
        <label>
            <input type="checkbox" name="lisand[]" value="juust"/>
            Juust
        </label><br/>
        <label>
            <input type="checkbox" name="lisand[]" value="salaami"/>
            Salaami
        </label><br/>
        <label>
            <input type="checkbox" name="lisand[]" value="seened"/>
            Seened
        </label><br/>

        <input type="submit" value="Vajuta mind"/>
        </form>

        <?php
            if(isset($_GET['valik'])) {
                if (!empty($_POST['lisand'])) {
                    echo "Valik on tehtud:</ol>";

                    foreach ($_POST['lisand'] as $lisand) {
                        echo "<li>$lisand</li>";
                    } echo "</ol>";
                } else {
                    echo "Vali midagi";
                }
            } else {
                echo "Vali lisandid";
            }

        ?>

    </body>
</html>
