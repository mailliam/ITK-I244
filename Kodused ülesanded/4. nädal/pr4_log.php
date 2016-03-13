<?php include("header.php") ?>

        <div id="sisu">
            <?php include("menyy.php"); ?>

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

        <div id="tekst">
            <h4>Siia panen ühe teksti, kuhu vahele lisan ühe pildi</h4>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <img id="piltTekstis" src="Pildid/th_kyylikud.jpg" alt="Küülikud">
                Quisque lobortis ultrices lacus, et viverra metus scelerisque ac. Sed sit amet purus turpis. Nullam iaculis dolor leo. Curabitur est nunc, imperdiet eu lobortis eu, sagittis quis diam. Nullam accumsan diam eros, ut tincidunt sem tincidunt interdum. Aliquam id nisl justo. Vestibulum sed venenatis orci. Vestibulum vitae dui id magna pretium suscipit eu at lectus. Curabitur elementum augue at arcu efficitur cursus. Proin at pretium libero. Curabitur ut elementum diam. Nulla maximus urna eros, eget volutpat justo hendrerit vitae. Proin eu maximus odio, eu tempor est. In quis vestibulum sapien. Nunc lobortis consectetur egestas.
            </p>

            <p>
                Sed vestibulum nibh ultrices elementum gravida. Vivamus euismod lectus blandit, imperdiet nisl id, pretium enim. Nulla molestie ipsum quis lacus sagittis varius. Morbi faucibus erat eget nulla porttitor, eu bibendum nunc fringilla. Vivamus tincidunt mi ex, vel ornare velit vulputate ut. Ut commodo, lacus sit amet suscipit pharetra, eros nunc finibus erat, vel condimentum diam magna in nunc. Quisque orci diam, imperdiet tincidunt erat eu, commodo lacinia tortor. Cras nec sapien sed neque ornare egestas eu a mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>

            <p>
                Phasellus ac ullamcorper nunc. In vel justo et mauris congue blandit. Proin volutpat non magna ut fringilla. Curabitur ac urna id urna tempor viverra. Mauris non ligula malesuada, venenatis eros vel, egestas neque. Etiam sollicitudin sit amet neque eget scelerisque. Vivamus auctor, felis et tincidunt finibus, felis nisl finibus dui, fringilla rutrum massa nisl sed enim. Praesent at leo eu felis vestibulum dignissim vitae vel dolor. Quisque in molestie est, non commodo lectus. In hac habitasse platea dictumst. Curabitur at lacus in eros rhoncus malesuada. Suspendisse lobortis dui et urna vulputate imperdiet vitae et arcu.
            </p>
            
            <p>
                Sed vestibulum nibh ultrices elementum gravida. Vivamus euismod lectus blandit, imperdiet nisl id, pretium enim. Nulla molestie ipsum quis lacus sagittis varius. Morbi faucibus erat eget nulla porttitor, eu bibendum nunc fringilla. Vivamus tincidunt mi ex, vel ornare velit vulputate ut. Ut commodo, lacus sit amet suscipit pharetra, eros nunc finibus erat, vel condimentum diam magna in nunc. Quisque orci diam, imperdiet tincidunt erat eu, commodo lacinia tortor. Cras nec sapien sed neque ornare egestas eu a mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>

            <p>
                Phasellus ac ullamcorper nunc. In vel justo et mauris congue blandit. Proin volutpat non magna ut fringilla. Curabitur ac urna id urna tempor viverra. Mauris non ligula malesuada, venenatis eros vel, egestas neque. Etiam sollicitudin sit amet neque eget scelerisque. Vivamus auctor, felis et tincidunt finibus, felis nisl finibus dui, fringilla rutrum massa nisl sed enim. Praesent at leo eu felis vestibulum dignissim vitae vel dolor. Quisque in molestie est, non commodo lectus. In hac habitasse platea dictumst. Curabitur at lacus in eros rhoncus malesuada. Suspendisse lobortis dui et urna vulputate imperdiet vitae et arcu.
            </p>

        </div>

        <?php include("footer.php") ?>
