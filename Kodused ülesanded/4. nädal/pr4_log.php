<?php include("header.php") ?>

        <?php include("menyy.php"); ?>

        <div id="sisu">
            <form method = "post" action = "vorm.php">
                <table>
                    <caption>Siit saab sisse logida</caption>
                    <tr>
                        <th>
                            <label for="username-id">Kasutajanimi</label>
                        </th>
                        <td>
                            <input type = "text" name = "username" id="username-id" placeholder = "Kasutajanimi">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="password-id">Parool</label>
                        </th>
                        <td>
                            <input type="password" name="password" id="password-id" placeholder="Parool">
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "2">
                            <label>
                                <input type="checkbox" name="remember_me">Pea mind meeles
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "2">
                            <button type = "submit">Logi sisse</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "2">
                            <a href="pr2_reg.html">Konto puudumisel registreeri end</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <?php include("footer.php") ?>
