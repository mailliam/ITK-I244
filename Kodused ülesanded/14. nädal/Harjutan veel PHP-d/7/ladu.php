<!doctype HTML>
<html>

<head>
    <title>Laoprogramm</title>
    <meta charset="utf-8">

    <style>
        #lisa-vorm {
            display: none;
        }
    </style>

</head>

<body>

    <h1>Laoprogramm</h1>

    <p id="kuva-nupp">
        <button type="button">Kuva lisamise vorm</button>
    </p>

    <form id="lisa-vorm" method="POST" action="haldus.php">

        <p id="peida-nupp">
            <button type="button">Peida lisamise vorm</button>
        </p>

        <table>
            <tr>
                <td>Nimetus</td>
                <td>
                    <input type="text" id="nimetus" name="nimetus">
                </td>
            </tr>
            <tr>
                <td>Kogus</td>
                <td>
                    <input type="number" id="kogus" name="kogus">
                </td>
            </tr>
        </table>

        <p>
            <button type="submit">Lisa kirje</button>
        </p>

    </form>

    <table id="ladu" border="1">
        <thead>
            <tr>
                <th>Nimetus</th>
                <th>Kogus</th>
                <th>Tegevused</th>
            </tr>
        </thead>

        <tbody>
            <?php include('haldus.php'); ?>
            <?php foreach($andmebaas as $index => $rida): ?>
                <tr>
                    <td>
                        <?= htmlspecialchars($rida['nimetus']); //lühem versioon php echost ?>
                    </td>
                    <td>
                        <?= $rida['kogus']; ?>
                    </td>
                    <td>
                        <form method="POST" action="haldus.php">

                            <input type="hidden" name="kustuta" value="<?= $index; ?>">
                            <button type="submit">Kustuta rida</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="ladu.js"></script>
</body>

</html>
