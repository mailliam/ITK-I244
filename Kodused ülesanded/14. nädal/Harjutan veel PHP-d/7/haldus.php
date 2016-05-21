<?php
    //Kasutame temp kausta antud juhul "anbmebaasi jaoks"
    $baas = '/tmp/ladupraktikumijjj.txt';
    //Funktsioon, mis väljastab faili sisu
    //Laeb faili sisu stringi muutujasse
    $andmebaas = file_get_contents($baas);
    //Deserialiseerime, võtab teksti ja muudab selle php massiiviks
    $andmebaas = json_decode($andmebaas, true);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(isset($_POST['kustuta'])) {
            $kustuta = intval($_POST['kustuta']);
            unset($andmebaas[$kustuta]);
        } else {
            //Laeme post päringust muutjad
            $nimetus = $_POST['nimetus'];
            $kogus = intval($_POST['kogus']); //konverteerib teksti sisu täisnumbriks

            if($nimetus == '' || $kogus <= 0) {
                header('Content-Type: text/plain; charset=utf-8');
                echo "Vigased väärtused";
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
    header('Location:ladu.php'); //ladu.php läheb urli lõppu

    //var_dump($andmebaas); (pole vaja enam, väljastab muutuja koos kirjeldusega)

}

?>
