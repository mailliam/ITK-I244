    <?php include("header.php") ?>

        <?php include("menyy.php"); ?>

        <div id="sisu">
            <form method="post" action="vorm.php">
                <input type="hidden" name="aeg" value="2016-02-23">
                <table>
                    <caption>Siit saab end registreerida</caption>
                    <tr>
                        <th>
                            Sugu
                        </th>
                        <td>
                            <label><input type="radio" name="gender" value="m">Mees</label>
                            <label><input type="radio" name="gender" value="n">Naine</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sünniaeg
                        </th>
                        <td>
                            <input type="date" name="birthdate">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kas ilm on ilus?
                        </th>
                        <td>
                            <select name="ilusilm">
                                <option value="1">Jah</option>
                                <option value="0">Ei</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kasutajanimi
                        </th>
                        <td>
                            <input type="text" name="username" placeholder="Kasutajanimi">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Parool
                        </th>
                        <td>
                            <input type="password" name="password" placeholder="Parool">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Korda parooli
                        </th>
                        <td>
                            <input type="password" name="password2" placeholder="Parool">
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "2">
                            <button type="submit">Registreeri</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php include("footer.php") ?>
