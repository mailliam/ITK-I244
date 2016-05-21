<?php

header('Content-Type: application/json; charset=utf-8');
//Kasutame temp kausta antud juhul "anbmebaasi jaoks"
$baas = '/tmp/ladufeafeapraktikumijjj.txt';
//Funktsioon, mis väljastab faili sisu
//Laeb faili sisu stringi muutujasse
if(file_exists($baas)) {
    $andmebaas = file_get_contents($baas);
    //Deserialiseerime, võtab teksti ja muudab selle php massiiviks
    $andmebaas = json_decode($andmebaas, true);
} else {
    $andmebaas = array();
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['kustuta'])) {
        $kustuta = intval($_POST['kustuta']);
        //unset($andmebaas[$kustuta]);

        $uus_andmebaas = array();
        foreach ($andmebaas as $index => $rida) {
            if($index != $kustuta) {
                $uus_andmebaas[] = $rida;
            }
        }

        $andmebaas = $uus_andmebaas;

    } else {
        //Laeme post päringust muutjad
        $nimetus = $_POST['nimetus'];
        $kogus = intval($_POST['kogus']); //konverteerib teksti sisu täisnumbriks
        if($nimetus == '' || $kogus <= 0) {
            echo json_encode(array(
                'error' => 'Vigased väärtused!'
            ));
            exit; //Erikäsk, mis lõpetab rakenduse töö
        }
        //Niiviisi saab muutujad stringist eemal hoida
        //echo sprintf('Nimetus: %s, Kogus: %s', $nimetus, $kogus); (pole enam vaja)
        //Käsitlen seda faili masiivina
        $andmebaas[] = array(
            'nimetus'=>$nimetus,
            'kogus'=>$kogus
        );
    }

//Muudan massiivi tekstiks, json-stringiks
$andmebaas = json_encode($andmebaas);
//Salvestan faili
file_put_contents($baas, $andmebaas);

//Kui kõik õnnestub, siis läheb laolehele tagasi, suunab brauseri tagasi esialgsele aadressile
echo $andmebaas;

//var_dump($andmebaas); (pole vaja enam, väljastab muutuja koos kirjeldusega)

} else {
    echo json_encode($andmebaas);
}

?>
