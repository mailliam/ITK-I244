<?php

$host = 'localhost';
$user = 'test';
$pass = 't3st3r123';
$db = 'test';

$conn = mysqli_connect($host, $user, $pass, $db);
mysqli_query($conn, 'SET CHARACTER SET UTF8') or
    die('Error, ei saa andmebaasi charsetti seatud');

function model_load() {
    global $conn;

    $query = "SELECT * FROM mkeerus__kaubad ORDER BY Nimetus ASC";
    $result = mysqli_query($conn, $query); //Kursorobjekt

    $rows = array(); //UUs massiiv ja loeme kõik tulemused sinna RecursiveCachingIterator

    if($result) {
        while($row = mysqli_fetch_assoc($result)) { //Kui annab väljundi, siis on true
            $rows[] = $row;
        }
    }
    return $rows;
}

function model_add($nimetus, $kogus) { //kontroller teeb kontrolli, siin eeldame, et andmed korrektsed
    global $conn;
    $query = 'INSERT INTO mkeerus__kaubad (Nimetus, Kogus) VALUES (?,?)';
    $stmt = mysqli_prepare($conn, $query); //Lause on ettevalmistatud, aga mitte veel käima pandud

    mysqli_stmt_bind_param($stmt, 'si', $nimetus, $kogus);

    //Alles siin väärtustatakse lause. Kui pärast bindi uuendada muutuja väärtust, siis käivitatakse uue väärtusega
    mysqli_stmt_execute($stmt);

    $id = mysqli_stmt_insert_id($stmt);
    mysqli_stmt_close($stmt);
    return $id;

}

function model_delete($id) {
    global $conn;
    $query = 'DELETE FROM mkeerus__kaubad WHERE Id=? LIMIT 1';
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $deleted = mysqli_stmt_affected_rows($stmt);
    mysqli_stmt_close($stmt);
    return $deleted;
}

function model_user_add($kasutajanimi, $parool) {
    global $conn;
    $hash = password_hash($parool, PASSWORD_DEFAULT); //password_hash kujutab endast sellist räsi, mida peetakse parasjagu turvalisek, ei ole staatilines
    $query = 'INSERT INTO mkeerus_kas (Kasutajanimi, Parool) VALUES (?,?)';
    $stmt = mysqli_prepare($conn, $query);
    if(mysqli_error($conn)) {
        echo mysqli_error($conn);
        exit;
    }
    mysqli_stmt_bind_param($stmt, 'ss', $kasutajanimi, $hash);
    mysqli_stmt_execute($stmt);
    $id = mysqli_stmt_insert_id($stmt);
    mysqli_stmt_close($stmt);
    return $id;
}

?>
