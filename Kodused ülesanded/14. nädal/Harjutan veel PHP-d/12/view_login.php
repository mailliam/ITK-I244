<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logi sisse</title>
    </head>

    <body>
        <h1>Logi sisse</h1>

        <form method="POST" action="<?= $_SERVER['PHP_SELF'];?>">
            <input type="hidden" name="action" value="login">
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
                <button type="submit">Logi sisse</button>
                või
                <a href="<?= $_SERVER['PHP_SELF'];?>?view=register">
                    Registreeri konto
                </a>
            </p>

        </form>

    </body>
</html>
