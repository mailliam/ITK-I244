<?php

$user = "test";
$pass = "t3st3r123";
$db = "test";
$host = "localhost";
$link = mysqli_connect($host, $user, $pass, $db) or die("Ei saanud ühendust");

mysqli_query($link, "SET CHARACTER SET UTF8") or die("Ei saanud utf8 seatud");

//ettevalmistus
$stmt = mysqli_prepare($link, "SELECT name, age, color, owner_id FROM mkeerus_cats
WHERE owner_id<? and age>?");

//muutujate sidumine

mysqli_stmt_bind_param($stmt, "ii", $owner, $older);
$owner = 3;
$older = 2;

//Käivitamine
mysqli_stmt_execute($stmt);

//Väärtuste võtmine
mysqli_stmt_bind_result($stmt, $r["name"], $r["age"], $r["color"], $r["owner"]);

//rea võtmine

?>

<pre><?php print_r($r); ?></pre>
<p>Omanik &lt; 3 ja vanus &gt; 3</p>
<table border="1">
    <?php while(mysqli_stmt_fetch($stmt)): ?>
        <tr>
            <?php foreach($r as $field): ?>
                <td>
                    <?php echo $field; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endwhile; ?>
</table>

<p>Omanik &lt; 4 ja vanus &gt; 3</p>

<?php
$owner = 4;
$older = 3;
mysqli_stmt_execute($stmt);
 ?>

<table border="1">
    <?php while(mysqli_stmt_fetch($stmt)): ?>
        <tr>
            <?php foreach($r as $field): ?>
                <td>
                    <?php echo $field; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endwhile; ?>
</table>
