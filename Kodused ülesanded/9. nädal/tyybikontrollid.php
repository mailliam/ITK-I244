<?php if (!empty($_GET["q"]) && is_numeric($_GET["q"]) ): ?>

    <table border="1px">
        <?php for ($i=0; $i < $_GET["q"]; $i++):?>
        <tr>
            <?php for ($j=0; $j < $_GET["q"]; $j++):?>
                <td>
                    <?php echo "$i-$j"; ?>
                </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
<?php else: ?>
    <p>Sisesta ikka number</p>
<?php endif; ?>

<meta charset="utf-8">
<form action="tyybikontrollid.php" method="GET">
    <input type="number" name="q"/>
    <input type="submit" name="s" value="Vajuta"/>
</form>
