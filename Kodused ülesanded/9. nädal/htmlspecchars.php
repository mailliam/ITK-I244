<?php
//ebaturvaline
if (!empty($_POST["q"])) {
    echo $_POST["q"];
}
?>

<hr/>

<?php

//turvaline
if (!empty($_POST["q"])) {
    echo htmlspecialchars($_POST["q"]);
}


?>

<form action="htmlspecchars.php" method="POST">
    <textarea name="q"></textarea>
    <input type="submit" name="s" value="Esita"/>
</form>
