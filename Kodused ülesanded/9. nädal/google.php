<?php

if(!empty($_POST)) {
    if(!empty($_POST["q"])) {
        $q=urlencode($_POST["q"]); //muudab & jms. märgid ära
        header("Location:https://www.google.ee/?#q={$q}");
        exit(0); //lõpetab programmi töö ära

    } else {
        echo "Sisesta otsingusõna";
    }

}

?>

<meta charset="utf-8">
<form action="google.php" method="POST">
    <input type="text" name="q"/>
    <input type="submit" name="s" value="otsi Googlest"/>
</form>
