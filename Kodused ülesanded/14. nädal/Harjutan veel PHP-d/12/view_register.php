<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registreerimine</title>
    </head>

    <body>
        <h1>Registreeri konto</h1>

        <form method="POST" action="<?= $_SERVER['PHP_SELF'];?>">
            <input type="hidden" name="action" value="register">
            <table>
                <tr>
                    <td>Kasutajanimi</td>
                    <td>
                        <input type="text" name="kasutajanimi" required>
                    </td>
                </tr>

                <tr>
                    <td>Parool</td>
                    <td>
                        <input type="password" name="parool" required>
                    </td>
                </tr>
            </table>

            <p>
                <button type="submit">Registreeri konto</button>
            </p>

        </form>


    </body>
</html>
